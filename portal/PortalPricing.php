<?php

namespace go1\util\portal;

use Doctrine\DBAL\Connection;
use go1\util\Currency;
use stdClass;

class PortalPricing
{
    const USER_LICENSES_MULTIPLY_RATE = 2;
    const PRODUCT_PLATFORM            = 'platform';
    const PRODUCT_PREMIUM             = 'premium';
    const REGIONAL                    = ['AU', 'EU', 'UK', 'US', self::REGIONAL_OTHER];
    const REGIONAL_DEFAULT            = 'AU';
    const REGIONAL_OTHER              = 'OTHER';
    const PLATFORM_FREE_LICENSE       = 5;
    const PLATFORM_UNLIMITED_LICENSE  = -1;
    const PLATFORM_H5                 = [ // > 5 licenses
                                          'AU'    => ['currency' => 'AUD', 'price' => 5],
                                          'EU'    => ['currency' => 'EUR', 'price' => 4.5],
                                          'UK'    => ['currency' => 'GBP', 'price' => 4],
                                          'US'    => ['currency' => 'USD', 'price' => 5],
                                          'OTHER' => ['currency' => 'USD', 'price' => 5],
    ];

    const PREMIUM_LICENSE = 20;
    const PREMIUM_LE20    = [// <= 20 licenses
                             'AU'    => ['currency' => 'AUD', 'price' => 9],
                             'EU'    => ['currency' => 'EUR', 'price' => 7],
                             'UK'    => ['currency' => 'GBP', 'price' => 6],
                             'US'    => ['currency' => 'USD', 'price' => 9],
                             'OTHER' => ['currency' => 'USD', 'price' => 9],
    ];
    const PREMIUM_H20     = [// > 20 licenses
                             'AU'    => ['currency' => 'AUD', 'price' => 8],
                             'EU'    => ['currency' => 'EUR', 'price' => 6],
                             'UK'    => ['currency' => 'GBP', 'price' => 5],
                             'US'    => ['currency' => 'USD', 'price' => 8],
                             'OTHER' => ['currency' => 'USD', 'price' => 8],
    ];

    const PLAN_STATUS_FREE            = 0;
    const PLAN_STATUS_TRIAL           = 1;
    const PLAN_STATUS_PAID            = 2;
    const PLAN_STATUS_OVERDUE_INVOICE = 3;
    const PLAN_STATUS                 = [
        self::PLAN_STATUS_FREE            => 'Free',
        self::PLAN_STATUS_TRIAL           => 'Trial',
        self::PLAN_STATUS_PAID            => 'Paid',
        self::PLAN_STATUS_OVERDUE_INVOICE => 'Overdue invoice',
    ];

    const TRIAL_EXPIRE = 3600 * 24 * 14;

    public static function getLicenses(stdClass $portal)
    {
        return !empty($portal->data->user_plan->license) ? $portal->data->user_plan->license : static::PLATFORM_UNLIMITED_LICENSE;
    }

    public static function getRegional(stdClass $portal)
    {
        return !empty($portal->data->user_plan->regional) ? $portal->data->user_plan->regional : static::REGIONAL_DEFAULT;
    }

    public static function getProduct(stdClass $portal)
    {
        return $portal->data->user_plan->product ?? static::PRODUCT_PLATFORM;
    }

    public static function getTrial(stdClass $portal)
    {
        return $portal->data->user_plan->trial ?? ($portal->data->configuration->trial ?? 0);
    }

    public static function getExpire(stdClass $portal)
    {
        return $portal->data->user_plan->expire ?? 0;
    }

    public static function getPortalPrice(stdClass $portal)
    {
        return $portal->data->user_plan->price ?? 0;
    }

    public static function getCurrency(stdClass $portal)
    {
        return $portal->data->user_plan->currency ?? Currency::DEFAULT;
    }

    public static function getManualPrice(stdClass $portal)
    {
        return $portal->data->user_plan->manual_price ?? false;
    }

    public static function getCustomContract(stdClass $portal)
    {
        return $portal->data->user_plan->custom_contract ?? false;
    }

    public static function getPartnerCustomer(stdClass $portal)
    {
        return $portal->data->user_plan->partner_customer ?? false;
    }

    public static function getUserLimitationNumber($portal)
    {
        $userLicenses = static::getLicenses($portal);

        // System default user: user.0, user.1, portal author
        $systemUsersNumber = 3;

        return ($userLicenses == static::PLATFORM_UNLIMITED_LICENSE)
            ? static::PLATFORM_UNLIMITED_LICENSE
            : $userLicenses * static::USER_LICENSES_MULTIPLY_RATE + $systemUsersNumber;
    }

    public static function countPortalUsers(Connection $db, $instance)
    {
        $count = $db->executeQuery('SELECT COUNT(*) FROM gc_user WHERE instance = ?', [$instance])->fetchColumn();

        // System default user: user.0, user.1
        return ($count > 2) ? $count - 2 : 0;
    }

    /**
     * https://go1web.atlassian.net/wiki/display/GO1/GO1+2017+Pricing
     *
     * @param stdClass $portal
     * @return array
     */
    public static function getPrice(stdClass $portal, $reCalculate = false): array
    {
        $currency = static::getCurrency($portal);
        $price = self::getPortalPrice($portal);
        if ($price && !$reCalculate) {
            return [$price, $currency];
        }

        $license = static::getLicenses($portal);
        $regional = static::getRegional($portal);
        $product = static::getProduct($portal);

        $basePrice = [];
        if (($product == static::PRODUCT_PLATFORM) && ($license > static::PLATFORM_FREE_LICENSE)) {
            $basePrice = static::PLATFORM_H5[$regional];
        }
        else if ($product == static::PRODUCT_PREMIUM) {
            if ($license <= static::PREMIUM_LICENSE) {
                $basePrice = static::PREMIUM_LE20[$regional];
            }
            else {
                $basePrice = static::PREMIUM_H20[$regional];
            }
        }

        return !empty($basePrice) ? [$basePrice['price'] * $license * 12, $basePrice['currency']] : [0, 'AUD'];
    }

    public static function calculateTrialStatus(stdClass $portal)
    {
        list($price,) = self::getPrice($portal, true);

        return ($price > 0) ? self::PLAN_STATUS_TRIAL : self::PLAN_STATUS_FREE;
    }

    public static function countCurrentActiveUser(Connection $db, $instance, string $since = '- 1 month'): int
    {
        $userCount = static::countPortalUsers($db, $instance);
        $userActiveCount = $db->executeQuery('SELECT COUNT(*) FROM gc_user WHERE instance = ? AND login >= ?', [$instance, strtotime($since)])->fetchColumn();

        return min($userCount, $userActiveCount);
    }
}

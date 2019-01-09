<?php

namespace go1\util\mail\domain;

class PortaldEmailTemplateProvider
{
    const PORTAL_CONFIG = [
        'key'    => 'portal.config',
        'tokens' => [
            '!user_full_name'  => 'User full name',
            '!user_mail'       => 'User mail',
            '!current_product' => 'Current product',
            '!current_license' => 'Current license',
            '!current_price'   => 'Current price',
            '!current_status'  => 'Current status',
            '!expire_date'     => 'Expire date',
            '!new_product'     => 'New product',
            '!new_license'     => 'New license',
            '!portal_name'     => 'Portal name',
            '!portal_image'    => 'Portal logo',
            '!portal_url'      => 'Portal URL',
            '!portal_title'    => 'Portal title',
            '!recipient_mail'  => 'Recipient mail',
        ],
    ];

    const ONBOARD_WELCOME = [
        'key'    => 'onboard.welcome',
        'tokens' => [
            '!user_first_name' => 'First name',
            '!user_name'       => 'User mail',
            '!site_name'       => 'Human name of the portal.',
            '!portal_url'      => 'The portal URL.',
            '!primary_domain'  => 'Primary domain of portal.',
        ],
    ];

    const ONBOARD_COMPLETE = [
        'key'    => 'onboard.complete',
        'tokens' => [
            '!first_name'   => 'First name',
            '!full_name'    => 'Full name',
            '!user_name'    => 'User mail',
            '!phone'        => 'Phone',
            '!license'      => 'License',
            '!product'      => 'Product',
            '!trial'        => 'Trial',
            '!region'       => 'Region',
            '!portal_name'  => 'Portal name',
            '!portal_url'   => 'Portal URL',
            '!portal_image' => 'Portal image',
        ],
    ];
}

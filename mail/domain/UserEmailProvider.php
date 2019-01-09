<?php

namespace go1\util\mail\domain;

use go1\util\queue\Queue;

class UserEmailProvider
{
    const USER_WELCOME_REGISTER = [
        'key'    => 'user.welcome.register',
        'tokens' => [
            '!user_name'       => 'Machine name of user name, this maybe the email address.', //deprecated
            '@user_name'       => 'User name.', //deprecated
            '!user_first_name' => 'User first name',
            '!site_name'       => 'Human name of the portal.', //deprecated
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'The portal URL.',
            '!primary_domain'  => 'Primary domain of portal.',
        ],
    ];

    const USER_WELCOME_INVITED = [
        'key'    => 'user.welcome.invite',
        'tokens' => [
            '@user_name'       => 'Name of invited user.', //deprecated
            '!user_name'       => 'Name of invitee user.', //deprecated
            '!user_first_name' => 'User first name.',
            '!user_mail'       => 'User mail.',
            '!host_email'      => 'Email of host user.',
            '!onetime_url'     => 'Onetime login link.',
            '!site_name'       => 'Human name of the portal.', //deprecated
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'The portal URL.',
            '!primary_domain'  => 'Primary domain of portal.',
        ],
    ];

    const USER_WELCOME_CREATED = [
        'key'    => 'user.welcome.create',
        'tokens' => [
            '!user_name'       => 'Machine name of user name, this maybe the email address.', //deprecated
            '@user_name'       => 'User name.', //deprecated
            '!user_first_name' => 'User first name.',
            '!user_mail'       => 'User mail.',
            '!onetime_url'     => 'Onetime login link.',
            '!site_name'       => 'Human name of the portal.', //deprecated
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'The portal URL.',
            '!primary_domain'  => 'Primary domain of portal.',
        ],
    ];

    const USER_PASSWORD_FORGET = [
        'key'    => 'user.password.forget',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!primary_domain'  => 'Primary domain of portal',
            '!onetime_url'     => 'Onetime login link',
            '!portal_name'     => 'Portal name',
            '!portal_image'    => 'Portal logo',
            '!portal_url'      => 'Portal URL',
        ],
    ];

    const USER_PASSWORD_CHANGED = [
        'key'    => 'user.password.changed',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail.',
            '!forget_pw_url'   => 'Link to forget password page.',
            '!portal_name'     => 'Portal name.',
            '!portal_image'    => 'Portal logo.',
            '!portal_url'      => 'Portal URL.',
        ],
    ];

    const USER_ONETIME_LOGIN = [
        'key'    => 'user.onetime-login',
        'tokens' => [/* @TODO */],
    ];

    const USER_LOGIN_FAILED = [
        'key'    => 'user.login.failed',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!site_name'       => 'Human name of the portal',
            '!primary_domain'  => 'Primary domain of portal',
            '!onetime_url'     => 'Onetime login link',
            '!portal_name'     => 'Portal name',
            '!portal_image'    => 'Portal logo',
            '!portal_url'      => 'Portal URL',
        ],
    ];

    const USER_MAIL_SECONDARY_CONFIRM = [
        'key'    => 'user.mail.secondary.confirm',
        'tokens' => [/* @TODO */],
    ];

    const USER_MAIL_SECONDARY_VERIFIED = [
        'key'    => 'user.mail.secondary.verified',
        'tokens' => [/* @TODO */],
    ];
    
    const USER_ENROL_COURSE = [
        'key'    => 'user.enrol.course',
        'tokens' => [
            '!first_name'       => 'User first name',
            '!course_name'      => 'Course name',
            '!author_name'      => 'Author full name',
            '!rating_url'       => 'Rating URL',
            '!pricing_currency' => 'Course price currency',
            '!pricing_price'    => 'Course price',
            '!pricing_tax'      => 'Course price tax',
            '!course_image'     => 'Course image',
            '!year'             => 'Copyright year',
        ],
    ];

    const USER_MANUAL_PAYMENT_CREATE = [
        'key'    => 'user.manual-payment.create',
        'tokens' => [
            '!recipient_name' => 'Recipient full name',
            '!user_name'      => 'User full name',
            '!course_name'    => 'Course name',
            '!description'    => 'Enrolment description',
            '!accept_url'     => 'Accept payment URL',
            '!reject_url'     => 'Reject payment URL',
        ],
    ];

    const USER_MANUAL_PAYMENT_BULK_CREATE = [
        'key'    => 'user.manual-payment.create',
        'tokens' => [
            '!recipient_name' => 'Recipient full name',
            '!recipient_mail' => 'Recipient mail',
            '!learner_name'   => 'Learner full name',
            '!course_name'    => 'Course name',
            '!quantity'       => 'Credit quantity',
            '!description'    => 'Enrolment description',
            '!credit_type'    => 'Credit type',
            '!accept_url'     => 'Accept payment URL',
            '!reject_url'     => 'Reject payment URL',
            '!portal_name'    => 'Portal name',
            '!portal_image'   => 'Portal image',
        ],
    ];

    const USER_MANUAL_PAYMENT_ACCEPT = [
        'key'    => 'user.manual-payment.accept',
        'tokens' => [
            '!payer_name'   => 'Payer full name',
            '!course_name'  => 'Course name',
            '!course_link'  => 'Course URL',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal image',
            '!learner_mail' => 'Learner mail',
        ],
    ];

    const USER_MANUAL_PAYMENT_REJECT = [
        'key'    => 'user.manual-payment.reject',
        'tokens' => [
            '!payer_name'   => 'Payer full name',
            '!course_name'  => 'Course name',
            '!course_link'  => 'Course URL',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal image',
            '!learner_mail' => 'Learner mail',
        ],
    ];

    const USER_GROUP_REQUEST = [
        'key'    => 'user.group.request',
        'tokens' => [
            '!recipient_name' => 'Recipient full name',
            '!user_name'      => 'User full name',
            '!user_mail'      => 'User email',
            '!group_name'     => 'Group name',
            '!accept_url'     => 'Accept payment URL',
            '!reject_url'     => 'Reject payment URL',
            '!portal_name'    => 'Portal name',
            '!portal_image'   => 'Portal image',
            '!portal_url'     => 'The portal URL',
        ],
    ];

    const USER_GROUP_REQUEST_ACCEPT = [
        'key'    => 'user.group.request.accept',
        'tokens' => [
            '!recipient_name'       => 'Recipient full name',
            '!recipient_first_name' => 'Recipient first name',
            '!group_name'           => 'Group name',
            '!group_url'            => 'Group URL',
            '!portal_name'          => 'Portal name',
            '!portal_image'         => 'Portal image',
            '!portal_url'           => 'The portal URL',
        ],
    ];

    const USER_GROUP_REQUEST_REJECT = [
        'key'    => 'user.group.request.reject',
        'tokens' => [
            '!recipient_name'       => 'Recipient full name',
            '!recipient_first_name' => 'Recipient first name',
            '!group_name'           => 'Group name',
            '!group_url'            => 'Group URL',
            '!portal_name'          => 'Portal name',
            '!portal_image'         => 'Portal image',
            '!portal_url'           => 'The portal URL',
        ],
    ];

    public const USER_BULK_NOTIFY = [
        'key'    => Queue::USER_BULK_NOTIFY,
        'tokens' => [
            '@user_name'      => 'User name.', //deprecated
            '!user_name'      => 'Machine name of user name, this maybe the email address.', //deprecated
            '!site_name'      => 'Human name of the portal.', //deprecated
            '!portal_url'     => 'Portal URL',
            '!primary_domain' => 'Primary domain of portal.',
        ],
    ];
}

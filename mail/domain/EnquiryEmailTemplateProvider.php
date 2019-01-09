<?php

namespace go1\util\mail\domain;

class EnquiryEmailTemplateProvider
{
    const ENQUIRY_SENT = [
        'key'    => 'lo.enquiry.sent',
        'tokens' => [
            '!request_url'    => 'Request URL',
            '!id'             => 'Course ID',
            '!user_name'      => 'User full name',
            '!mail'           => 'User mail',
            '!phone'          => 'User phone',
            '!time'           => 'Enquiry time',
            '!title'          => 'Course title',
            '!portal_name'    => 'Portal name',
            '!portal_image'   => 'Portal image',
            '!recipient_mail' => 'Recipient mail',
        ],
    ];

    const ENQUIRY_ACCEPTED = [
        'key'    => 'lo.enquiry.accepted',
        'tokens' => [
            '!learner_name' => 'Learn name',
            '!course_name'  => 'Course name',
            '!course_url'   => 'Course URL',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal image',
            '!learner_mail' => 'Learner mail',
        ],
    ];

    /* deprecated */
    const ENQUIRY_REJECED = [
        'key'    => 'lo.enquiry.rejected',
        'tokens' => [
            '!title'     => 'Course title',
            '!first'     => 'User first name',
            '!last'      => 'User last name',
            '!site_name' => 'Human name of the portal',
        ],
    ];

    const ENQUIRY_REJECTED = [
        'key'    => 'lo.enquiry.rejected',
        'tokens' => [
            '!learner_name' => 'Learn name',
            '!course_name'  => 'Course name',
            '!course_url'   => 'Course URL',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal image',
            '!learner_mail' => 'Learner mail',
        ],
    ];

    const ENQUIRY_NOTIFY_STAFF = [
        'key'    => 'lo.enquiry.notify.staff',
        'tokens' => [/* @TODO */],
    ];

    // Contact us enquiry form
    const CONTACT_US_ENQUIRY = [
        'key'    => 'user.contact-us-enquiry',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!user_phone'      => 'User phone',
            '!user_message'    => 'User message',
        ],
    ];

    const MARKETPLACE_REQUEST = [
        'key'    => 'marketplace.request',
        'tokens' => [
            '!manager_name'   => 'Manager name',
            '!manager_mail'   => 'Manager mail',
            '!course_name'    => 'Course name',
            '!course_url'     => 'Course URL',
            '!setting_url'    => 'Setting URL',
            '!portal_name'    => 'Portal name',
            '!portal_image'   => 'Portal logo',
            '!portal_url'     => 'Portal URL',
            '!recipient_mail' => 'Recipient mail',
        ],
    ];

    const MARKETPLACE_APPROVE = [
        'key'    => 'marketplace.approve',
        'tokens' => [
            '!staff_first_name' => 'User first name',
            '!manager_name'     => 'Manager name',
            '!course_name'      => 'Course name',
            '!portal_name'      => 'Portal name',
            '!portal_image'     => 'Portal logo',
            '!manager_mail'     => 'Manager mail',
        ],
    ];

    const MARKETPLACE_REJECT = [
        'key'    => 'marketplace.reject',
        'tokens' => [
            '!staff_first_name' => 'User first name',
            '!manager_name'     => 'Manager name',
            '!course_name'      => 'Course name',
            '!portal_name'      => 'Portal name',
            '!portal_image'     => 'Portal logo',
            '!manager_mail'     => 'Manager mail',
        ],
    ];
}

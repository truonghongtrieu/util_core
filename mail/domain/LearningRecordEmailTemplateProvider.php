<?php

namespace go1\util\mail\domain;

class LearningRecordEmailTemplateProvider
{
    const CREDIT_REQUEST = [
        'key'    => 'credit.request',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_full_name'  => 'Learner full name',
            '!course_name'        => 'Course title',
            '!pricing_price'      => 'Course price',
            '!pricing_currency'   => 'Course price currency',
            '!pricing_tax'        => 'Course price tax',
            '!course_url'         => 'Course URL',
            '!approve_link'       => 'Credit approve URL',
            '!reject_link'        => 'Credit reject URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!manager_mail'       => 'Manager mail',
        ],
    ];

    const CREDIT_REQUEST_ACCEPT = [
        'key'    => 'credit.request.accept',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!manager_name'       => 'Manager first name',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];

    const CREDIT_REQUEST_REJECT = [
        'key'    => 'credit.request.reject',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!manager_name'       => 'Manager first name',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];

    const CREDIT_ASSIGN = [
        'key'    => 'credit.assign',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_name'       => 'Learner full name',
            '!learner_mail'       => 'Learner mail',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
            '!purchaser_name'     => 'Purchaser full name',
            '!onetime_url'        => 'Onetime URL',
        ],
    ];

    const PAYMENT_STRIPE_AUTHORIZE = [
        'key'    => 'payment.stripe.authorize',
        'tokens' => [
            '!manager_name' => 'Manager name',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal logo',
            '!portal_url'   => 'Portal URL',
            '!manager_mail' => 'Manager mail',
        ],
    ];

    const PAYMENT_STRIPE_DEAUTHORIZE = [
        'key'    => 'payment.stripe.deauthorize',
        'tokens' => [
            '!manager_name' => 'Manager name',
            '!portal_name'  => 'Portal name',
            '!portal_image' => 'Portal logo',
            '!portal_url'   => 'Portal URL',
            '!manager_mail' => 'Manager mail',
        ],
    ];

    const ENROLMENT_REPORT = [
        'key'    => 'enrolment.report',
        'tokens' => [
            '!recipient_mail' => 'Recipient mail',
            '!company_name'   => 'Company name',
            '!portal_name'    => 'Portal name',
            '!portal_image'   => 'Portal image',
            '!portal_url'     => 'Portal URL',
        ],
    ];

    const LEARNER_ENROLMENT_COURSE = [
        'key'    => 'learner.enrol.course',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const LEARNER_ENROLMENT_EVENT = [
        'key'    => 'learner.enrol.event',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!event_name'         => 'Event name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const AUTHOR_ENROLMENT_COURSE = [
        'key'    => 'author.enrol.course',
        'tokens' => [
            '!author_first_name' => 'Author first name',
            '!author_mail'       => 'Author mail',
            '!learner_name'      => 'Learner name',
            '!learner_mail'      => 'Learner mail',
            '!course_name'       => 'Course name',
            '!portal_name'       => 'Portal name',
            '!portal_image'      => 'Portal image',
        ],
    ];

    const COURSE_COMPLETE = [
        'key'    => 'course.complete',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!course_name'     => 'Course name',
            '!portal_url'      => 'Portal URL',
        ],
    ];

    const QUIZ_MARKING = [
        'key'    => 'quiz.marking',
        'tokens' => [
            '!learner_full_name' => 'Learner full name',
            '!quiz_title'        => 'Quiz title',
            '!quiz_url'          => 'Quiz URL',
            '!portal_name'       => 'Portal name',
            '!portal_image'      => 'Portal logo',
            '!assessor_mail'     => 'Assessor mail',
        ],
    ];

    const QUIZ_MARKED = [
        'key'    => 'quiz.marked',
        'tokens' => [
            '!li_title' => 'Learning item title',
        ],
    ];
}

<?php

namespace go1\util\mail\domain;

class RemindEmailTemplateServiceProvider
{
    // No activity after registration (user)
    const REMIND_NO_ACTIVITY_USER = [
        'key'    => 'user.remind.no-activity-user',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // No activity after registration (collab)
    const REMIND_NO_ACTIVITY_COLLABORATOR = [
        'key'    => 'user.remind.no-activity-collaborator',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // Expiry of free access
    const REMIND_FREE_TRIAL_EXPIRE = [
        'key'    => 'user.remind.free-trial-expire',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // Free access expired encouragement
    const REMIND_FREE_TRIAL_EXPIRED = [
        'key'    => 'user.remind.free-trial-expired',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // Remind to start course
    const REMIND_COURSE = [
        'key'    => 'user.remind.course',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!course_name'     => 'Course name',
            '!course_url'      => 'Course URL',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // Expiry of subscription
    const REMIND_SUBSCRIPTION_EXPIRE = [
        'key'    => 'user.remind.subscription-expire',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];

    // Subscription expired
    const REMIND_SUBSCRIPTION_EXPIRED = [
        'key'    => 'user.remind.subscription-expired',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!user_mail'       => 'User mail',
            '!portal_name'     => 'Portal name',
            '!portal_url'      => 'Portal URL',
            '!portal_image'    => 'Portal logo',
        ],
    ];
    
    const REMIND_LEARNER_DUE_DATE_REACHED = [
        'key'    => 'remind.learner.due-date-reached',
        'tokens' => [
            '!time_remaining'        => 'Time remaining',
            '!learning_object_title' => 'Learning object title',
            '!learner_first_name'    => 'Learner first name',
            '!assigner_full_name'    => 'Assigner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!learner_mail'          => 'Learner mail',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_75_PERCENT_SCHEDULED_DURATION_PASSED = [
        'key'    => 'remind.learner.75percent-scheduled-duration-passed',
        'tokens' => [
            '!time_remaining'        => 'Time remaining',
            '!learning_object_title' => 'Learning object title',
            '!learner_first_name'    => 'Learner first name',
            '!assigner_full_name'    => 'Assigner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!learner_mail'          => 'Learner mail',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_DUE_DATE_2_DAYS_OVERDUE = [
        'key'    => 'remind.learner.due-date-2-days-overdue',
        'tokens' => [
            '!time_remaining'        => 'Time remaining',
            '!learning_object_title' => 'Learning object title',
            '!learner_first_name'    => 'Learner first name',
            '!assigner_full_name'    => 'Assigner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!learner_mail'          => 'Learner mail',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_EVENT_ON_START_DATE = [
        'key'    => 'remind.learner.event-on-start-date',
        'tokens' => [
            '!event_name'         => 'Event name',
            '!event_start_date'   => 'Event start date',
            '!event_start_time'   => 'Event start time',
            '!event_end_date'     => 'Event end date',
            '!event_end_time'     => 'Event end time',
            '!event_address'      => 'Event address',
            '!learner_first_name' => 'Learner first name',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!learner_mail'       => 'Learner mail',
            '!view_detail_url'    => 'View detail url',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_EVENT_UPCOMING = [
        'key'    => 'remind.learner.event-upcoming',
        'tokens' => [
            '!event_name'         => 'Event name',
            '!event_start_date'   => 'Event start date',
            '!event_start_time'   => 'Event start time',
            '!event_end_date'     => 'Event end date',
            '!event_end_time'     => 'Event end time',
            '!event_address'      => 'Event address',
            '!learner_first_name' => 'Learner first name',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!learner_mail'       => 'Learner mail',
            '!view_detail_url'    => 'View detail url',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_EVENT_ON_START_DATE = [
        'key'    => 'remind.assessor.event-on-start-date',
        'tokens' => [
            '!event_name'          => 'Event name',
            '!event_start_date'    => 'Event start date',
            '!event_start_time'    => 'Event start time',
            '!event_end_date'      => 'Event end date',
            '!event_end_time'      => 'Event end time',
            '!event_address'       => 'Event address',
            '!number_of_attendees' => 'Number of attendees',
            '!assessor_first_name' => 'Assessor first name',
            '!course_name'         => 'Course name',
            '!course_url'          => 'Course URL',
            '!assessor_mail'       => 'Assessor mail',
            '!view_attendees_url'  => 'View attendees url',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_EVENT_DATE_ON_START_DATE = [
        'key'    => 'remind.assessor.event-date-on-start-date',
        'tokens' => [
            '!event_name'          => 'Event name',
            '!event_start_date'    => 'Event start date',
            '!event_start_time'    => 'Event start time',
            '!event_end_date'      => 'Event end date',
            '!event_end_time'      => 'Event end time',
            '!event_address'       => 'Event address',
            '!number_of_attendees' => 'Number of attendees',
            '!assessor_first_name' => 'Assessor first name',
            '!course_name'         => 'Course name',
            '!course_url'          => 'Course URL',
            '!assessor_mail'       => 'Assessor mail',
            '!view_attendees_url'  => 'View attendees url',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_EVENT_DATE_UPCOMING = [
        'key'    => 'remind.assessor.event-date-upcoming',
        'tokens' => [
            '!event_name'          => 'Event name',
            '!event_start_date'    => 'Event start date',
            '!event_start_time'    => 'Event start time',
            '!event_end_date'      => 'Event end date',
            '!event_end_time'      => 'Event end time',
            '!event_address'       => 'Event address',
            '!number_of_attendees' => 'Number of attendees',
            '!assessor_first_name' => 'Assessor first name',
            '!course_name'         => 'Course name',
            '!course_url'          => 'Course URL',
            '!assessor_mail'       => 'Assessor mail',
            '!view_attendees_url'  => 'View attendees url',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_EVENT_UPCOMING = [
        'key'    => 'remind.assessor.event-upcoming',
        'tokens' => [
            '!event_name'          => 'Event name',
            '!event_start_date'    => 'Event start date',
            '!event_start_time'    => 'Event start time',
            '!event_end_date'      => 'Event end date',
            '!event_end_time'      => 'Event end time',
            '!event_address'       => 'Event address',
            '!number_of_attendees' => 'Number of attendees',
            '!assessor_first_name' => 'Assessor first name',
            '!course_name'         => 'Course name',
            '!course_url'          => 'Course URL',
            '!assessor_mail'       => 'Assessor mail',
            '!view_attendees_url'  => 'View attendees url',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_AWARD_EXPIRY_DATE_REACHED = [
        'key'    => 'remind.learner.award-expiry-date-reached',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!expiry_date'        => 'Expiry date',
            '!award_url'          => 'Award URL',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_AWARD_EXPIRY_2DAYS_OVERDUE = [
        'key'    => 'remind.learner.award-expiry-2days-overdue',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!expiry_date'        => 'Expiry date',
            '!award_url'          => 'Award URL',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_LEARNER_AWARD_75_PERCENT_COMPLETED_DURATION_PASSED = [
        'key'    => 'remind.learner.award-75percent-completed-duration-passed',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!expiry_date'        => 'Expiry date',
            '!award_url'          => 'Award URL',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
            '!time_remaining'     => 'Time remaining',
        ],
    ];

    const REMIND_MANAGER_AWARD_EXPIRY_DATE_REACHED = [
        'key'    => 'remind.manager.award-expiry-date-reached',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!award_url'          => 'Award URL',
            '!expiry_date'        => 'Expiry date',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!learner_full_name'  => 'Learner full name',
            '!manager_mail'       => 'Manager mail',
            '!manager_first_name' => 'Manager first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_MANAGER_AWARD_EXPIRY_2DAYS_OVERDUE = [
        'key'    => 'remind.manager.award-expiry-2days-overdue',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!award_url'          => 'Award URL',
            '!expiry_date'        => 'Expiry date',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!learner_full_name'  => 'Learner full name',
            '!manager_mail'       => 'Manager mail',
            '!manager_first_name' => 'Manager first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_MANAGER_AWARD_75_PERCENT_COMPLETED_DURATION_PASSED = [
        'key'    => 'remind.manager.award-75percent-completed-duration-passed',
        'tokens' => [
            '!award_title'        => 'Award title',
            '!award_url'          => 'Award URL',
            '!expiry_date'        => 'Expiry date',
            '!learner_mail'       => 'Learner mail',
            '!learner_first_name' => 'Learner first name',
            '!learner_full_name'  => 'Learner full name',
            '!manager_mail'       => 'Manager mail',
            '!manager_first_name' => 'Manager first name',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_AWARD_EXPIRY_DATE_REACHED = [
        'key'    => 'remind.assessor.award-expiry-date-reached',
        'tokens' => [
            '!assessor_first_name' => 'Assessor first name',
            '!learner_full_name'   => 'Learner full name',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award URL',
            '!expiry_date'         => 'Expiry date',
            '!assessor_mail'       => 'Assessor mail',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_75_PERCENT_SCHEDULED_DURATION_PASSED = [
        'key'    => 'remind.assessor.75percent-scheduled-duration-passed',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!assessor_first_name'   => 'Assessor first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!time_remaining'        => 'Time remaining',
            '!assessor_email'        => 'Assessor email',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_DUE_DATE_2_DAYS_OVERDUE = [
        'key'    => 'remind.assessor.due-date-2-days-overdue',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!assessor_first_name'   => 'Assessor first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!assessor_email'        => 'Assessor email',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_ASSESSOR_DUE_DATE_REACHED = [
        'key'    => 'remind.assessor.due-date-reached',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!assessor_first_name'   => 'Assessor first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!assessor_email'        => 'Assessor email',
            '!action_url'            => 'Action url',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_MANAGER_75_PERCENT_SCHEDULED_DURATION_PASSED = [
        'key'    => 'remind.manager.75percent-scheduled-duration-passed',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!manager_first_name'    => 'Manager first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!time_remaining'        => 'Time remaining',
            '!manager_email'         => 'Manager email',
            '!action_url'            => 'Action URL',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_MANAGER_DUE_DATE_2_DAYS_OVERDUE = [
        'key'    => 'remind.manager.due-date-2-days-overdue',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!assessor_first_name'   => 'Manager first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!manager_email'         => 'Manager email',
            '!action_url'            => 'Action URL',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];

    const REMIND_MANAGER_DUE_DATE_REACHED = [
        'key'    => 'remind.manager.due-date-reached',
        'tokens' => [
            '!learning_object_title' => 'Learning object title',
            '!manager_first_name'    => 'Manager first name',
            '!learner_full_name'     => 'Learner full name',
            '!scheduled_due_date'    => 'Scheduled due date',
            '!manager_email'         => 'Manager email',
            '!action_url'            => 'Action URL',
            '!portal_name'           => 'Portal name',
            '!portal_image'          => 'Portal image',
            '!portal_url'            => 'Portal URL',
        ],
    ];
}

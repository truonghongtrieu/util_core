<?php

namespace go1\util\mail\domain;

class AwardEmailTemplateProvider
{
    const AWARD_UPDATE = [
        'key'    => 'award.update',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!award_name'         => 'Award name',
            '!award_url'          => 'Award URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];

    const AWARD_ASSIGN = [
        'key'    => 'award.assign',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!award_name'         => 'Award name',
            '!award_url'          => 'Award URL',
            '!assigner_full_name' => 'Assigner full name',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];

    const AWARD_ASSIGN_THROUGH_GROUP = [
        'key'    => 'award.assign.through.group',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!award_name'         => 'Award name',
            '!award_url'          => 'Award URL',
            '!assigner_full_name' => 'Assigner full name',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
            '!group_title'        => 'Group title',
            '!group_url'          => 'Group url',
        ],
    ];

    const AWARD_ACHIEVE = [
        'key'    => 'award.achieve',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!award_name'         => 'Award name',
            '!award_url'          => 'Award URL',
            '!award_expiry'       => 'Award expiry date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];


    const AWARD_LIST = [
        'key'    => 'award.list',
        'tokens' => [
            '!award_name'    => 'Award name',
            '!award_image'   => 'Award image',
            '!award_url'     => 'Award URL',
            '!award_content' => 'Award html content',
            '!portal_name'   => 'Portal name',
            '!portal_image'  => 'Portal logo',
            '!portal_url'    => 'Portal URL',
        ],
    ];

    const AWARD_ASSIGN_THEMSELVES = [
        'key'    => 'award.assign.themselves',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!award_name'         => 'Award name',
            '!award_url'          => 'Award URL',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal logo',
        ],
    ];

    const REMIND_ASSESSOR_AWARD_EXPIRY_2DAYS_OVERDUE = [
        'key'    => 'remind.assessor.award-expiry-2days-overdue',
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

    const REMIND_ASSESSOR_AWARD_75_PERCENT_COMPLETED_DURATION_PASSED = [
        'key'    => 'remind.assessor.award-75percent-completed-duration-passed',
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

    const LEARNER_AWARD_ITEM_MANUAL_IS_ADDED = [
        'key'    => 'learner.award.item-manual.is-added',
        'tokens' => [
            '!submitter_full_name' => 'Submitter full name',
            '!learner_first_name'  => 'Learner first name',
            '!learner_mail'        => 'Learner mail',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award URL',
            '!award_records_url'   => 'Award records URL',
            '!award_item_title'    => 'Award item title',
            '!submitter_mail'      => 'Submitter mail',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const LEARNER_AWARD_ITEM_MANUAL_IS_MODIFIED = [
        'key'    => 'learner.award.item-manual.is-modified',
        'tokens' => [
            '!submitter_full_name' => 'Submitter full name',
            '!learner_first_name'  => 'Learner first name',
            '!learner_mail'        => 'Learner mail',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award URL',
            '!award_records_url'   => 'Award records URL',
            '!award_item_title'    => 'Award item title',
            '!submitter_mail'      => 'Submitter mail',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const LEARNER_AWARD_ITEM_MANUAL_IS_PASSED = [
        'key'    => 'learner.award.item-manual.is-passed',
        'tokens' => [
            '!submitter_full_name' => 'Submitter full name',
            '!learner_first_name'  => 'Learner first name',
            '!learner_mail'        => 'Learner mail',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award URL',
            '!award_records_url'   => 'Award records URL',
            '!award_item_title'    => 'Award item title',
            '!submitter_mail'      => 'Submitter mail',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const ASSESSOR_AWARD_ITEM_MANUAL_IS_ADDED = [
        'key'    => 'assessor.award.item-manual.is-added',
        'tokens' => [
            '!editor_full_name'    => 'Editor full name',
            '!assessor_first_name' => 'Assessor first name',
            '!assessor_mail'       => 'Assessor mail',
            '!learner_full_name'   => 'Learner full name',
            '!learner_first_name'  => 'Learner first name',
            '!learner_mail'        => 'Learner mail',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award Url',
            '!award_records_url'   => 'Award records URL',
            '!award_item_title'    => 'Award item title',
            '!award_enrolment_url' => 'Award enrolment URL',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

    const ASSESSOR_AWARD_ITEM_MANUAL_IS_MODIFIED = [
        'key'    => 'assessor.award.item-manual.is-modified',
        'tokens' => [
            '!editor_full_name'    => 'Editor full name',
            '!assessor_first_name' => 'Assessor first name',
            '!assessor_mail'       => 'Assessor mail',
            '!learner_full_name'   => 'Learner full name',
            '!learner_first_name'  => 'Learner first name',
            '!learner_mail'        => 'Learner mail',
            '!award_title'         => 'Award title',
            '!award_url'           => 'Award Url',
            '!award_records_url'   => 'Award records URL',
            '!award_item_title'    => 'Award item title',
            '!award_enrolment_url' => 'Award enrolment URL',
            '!portal_name'         => 'Portal name',
            '!portal_image'        => 'Portal image',
            '!portal_url'          => 'Portal URL',
        ],
    ];

}

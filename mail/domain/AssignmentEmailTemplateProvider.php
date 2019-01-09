<?php

namespace go1\util\mail\domain;

class AssignmentEmailTemplateProvider
{
    const GROUP_ASSIGN = [
        'key'    => 'group.assign',
        'tokens' => [
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!group_name'         => 'Group name',
            '!group_url'          => 'Group URL',
            '!portal_name'        => 'Portal name',
            '!portal_url'         => 'Portal URL',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const ASSIGNMENT_SUBMIT = [
        'key'    => 'assignment.submit',
        'tokens' => [
            '!learner_name'    => 'Learner full name',
            '!assignment_name' => 'Assignment name',
            '!module_name'     => 'Module name',
            '!submission_time' => 'Submission time',
            '!assignment_url'  => 'Assignment URL',
            '!portal_name'     => 'Portal name',
            '!portal_image'    => 'Portal image',
        ],
    ];

    const ASSIGNMENT_MARKED = [
        'key'    => 'assignment.marked',
        'tokens' => [
            '!li_title'          => 'Learning item title',
            '!li_submission_url' => 'Learning item submission url',
            '!portal_name'       => 'Portal name',
            '!portal_image'      => 'Portal logo',
            '!leaner_mail'       => 'Learner mail',
        ],
    ];

    const LEARNER_ASSIGN_COURSE_WITH_DUE_DATE = [
        'key'    => 'learner.assign.course.with-due-date',
        'tokens' => [
            '!entity_type'        => '`course` or `resource`',
            '!entity_type_human'  => '`course` or `learning resource`',
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!assigner_full_name' => 'Assigner full name',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const LEARNER_ASSIGN_COURSE_WITHOUT_DUE_DATE = [
        'key'    => 'learner.assign.course.without-due-date',
        'tokens' => [
            '!entity_type'        => '`course` or `resource`',
            '!entity_type_human'  => '`course` or `learning resource`',
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!assigner_full_name' => 'Assigner full name',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const LEARNER_ASSIGN_COURSE_THEMSELVES_WITH_DUE_DATE = [
        'key'    => 'learner.assign.course.themselves.with-due-date',
        'tokens' => [
            '!entity_type'        => 'Entity type',
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const LEARNER_ASSIGN_COURSE_THEMSELVES_WITHOUT_DUE_DATE = [
        'key'    => 'learner.assign.course.themselves.without-due-date',
        'tokens' => [
            '!entity_type'        => 'Entity type',
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
        ],
    ];

    const LEARNER_ASSIGN_COURSE_THROUGH_GROUP = [
        'key'    => 'learner.assign.course.through.group',
        'tokens' => [
            '!entity_type'        => '`course` or `resource`',
            '!learner_first_name' => 'Learner first name',
            '!learner_mail'       => 'Learner mail',
            '!course_name'        => 'Course name',
            '!course_url'         => 'Course URL',
            '!scheduled_due_date' => 'Scheduled due date',
            '!portal_name'        => 'Portal name',
            '!portal_url'         => 'Portal url',
            '!portal_image'       => 'Portal image',
            '!group_title'        => 'Group title',
            '!group_url'          => 'Group url',
        ],
    ];

    const ASSESSOR_ASSIGNMENT_FEEDBACK = [
        'key'    => 'assessor.assignment.feedback',
        'tokens' => [
            '!learner_full_name' => 'Learner full name',
            '!learner_mail'      => 'Learner mail',
            '!recipient_mail'    => 'Recipient mail',
            '!assignment_name'   => 'Assignment name',
            '!assignment_url'    => 'Assignment URL',
            '!my_teaching_url'   => 'My teaching URL',
            '!description'       => 'Feedback of an assignment',
            '!my_reply_url'      => 'My reply URL',
            '!portal_name'       => 'Portal name',
            '!portal_image'      => 'Portal image',
            '!portal_url'        => 'Portal URL',
        ],
    ];

    const LEARNER_ASSIGNMENT_FEEDBACK = [
        'key'    => 'learner.assignment.feedback',
        'tokens' => [
            '!assessor_full_name' => 'Assessor full name',
            '!learner_mail'       => 'Learner mail',
            '!assignment_name'    => 'Assignment name',
            '!assignment_url'     => 'Assignment URL',
            '!description'        => 'Feedback of an assignment',
            '!my_reply_url'       => 'My reply URL',
            '!portal_name'        => 'Portal name',
            '!portal_image'       => 'Portal image',
            '!portal_url'         => 'Portal URL',
        ],
    ];
}

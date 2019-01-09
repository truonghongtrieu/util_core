<?php

namespace go1\util;

use go1\util\content_import\ContentImportCompleteCreate;
use InvalidArgumentException;
use ReflectionClass;

class MailTemplate
{
    const NOTE_CREATE = [
        'key'    => 'note.create',
        'tokens' => [
            '!user_first_name' => 'User first name',
            '!entity_type'     => 'Note entity type',
            '!entity_name'     => 'Note entity name',
            '!note_url'        => 'Note URL',
            '!portal_name'     => 'Portal name',
            '!portal_image'    => 'Portal logo',
            '!recipient_mail'  => 'Recipient mail',
        ],
    ];

    const NOTE_MENTION = [
        'key'    => 'note.mention',
        'tokens' => [
            '!entity_type'       => 'Note entity type',
            '!entity_name'       => 'Note entity name',
            '!author_first_name' => 'Author first name',
            '!note_url'          => 'Note URL',
            '!portal_name'       => 'Portal name',
            '!portal_image'      => 'Portal logo',
            '!recipient_mail'    => 'Recipient mail',
        ],
    ];

    // Decision and Action started
    const DECISION_AND_ACTION_START = [
        'key'    => 'bos.decision.start',
        'tokens' => [
            '!user_first_name'   => 'User first name',
            '!user_mail'         => 'User mail',
            '!project_name'      => 'Project name',
            '!collaborator_name' => 'Collaborator name',
        ],
    ];

    // Decision and Action ended
    const DECISION_AND_ACTION_END = [
        'key'    => 'bos.decision.end',
        'tokens' => [
            '!user_first_name'   => 'User first name',
            '!user_mail'         => 'User mail',
            '!project_name'      => 'Project name',
            '!collaborator_name' => 'Collaborator name',
        ],
    ];

    public const CONTENT_IMPORT_COMPLETE = [
        'key'    => ContentImportCompleteCreate::ROUTING_KEY,
        'tokens' => [
            '!user_first_name'       => 'User first name',
            '!content_import_status' => 'Content job import status',
            '!processed_count'       => 'Total processed count, which is successCount + failedCount',
            '!success_count'         => 'Success Count',
            '!failed_count'          => 'Failed count',
            '!portal'                => "Portal name",
            '!user_mail'             => 'User email',
        ],
    ];

    public static function has(string $key): bool
    {
        $self = new ReflectionClass(__CLASS__);
        foreach ($self->getConstants() as $constant => $value) {
            if (isset($value['key'])) {
                if ($key === $value['key']) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function token(string $key)
    {
        $self = new ReflectionClass(__CLASS__);
        foreach ($self->getConstants() as $constant => $value) {
            if (isset($value['key'])) {
                if ($key === $value['key']) {
                    return $value['tokens'];
                }
            }
        }

        return new InvalidArgumentException('Mail template not found.');
    }
}

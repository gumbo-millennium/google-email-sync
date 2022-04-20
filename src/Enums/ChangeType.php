<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Enums;

enum ChangeType: string
{
    case Unknown = 'UNKNOWN';
    case Added = 'ADDED';
    case Removed = 'REMOVED';
    case RoleChange = 'ROLE_CHANGE';
}

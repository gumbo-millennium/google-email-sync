<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Enums;

enum Role: string
{
    case Owner = 'OWNER';
    case Manager = 'MANAGER';
    case Member = 'MEMBER';
}

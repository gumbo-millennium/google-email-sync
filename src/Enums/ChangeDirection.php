<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Enums;

enum ChangeDirection: string
{
    /**
     * Change was sent to the Google Directory API.
     */
    case Up = 'Up';
    /**
     * Change was recieved from the Google Directory API.
     */
    case Down = 'Down';
}

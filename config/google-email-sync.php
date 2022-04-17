<?php

declare(strict_types=1);

return [
    /**
     * Google API key file.
     *
     * This should be the absolute path to the key file for the Google API.
     * The key file should grant access to the following scopes:
     * - https://www.googleapis.com/auth/admin.directory.group
     * - https://www.googleapis.com/auth/admin.directory.group.member
     */
    'key-file' => env('GOOGLE_AUTH_FILE'),
];

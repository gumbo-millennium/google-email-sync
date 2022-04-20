<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Contracts;

use Gumbo\EmailSync\Models\EmailList;
use Gumbo\EmailSync\Models\EmailListMutation;

interface EmailSyncServiceContract
{
    /**
     * Creates or updates the Google Group based on the given EmailList model.
     */
    public function pushList(EmailList $emailList): EmailListMutation;

    /**
     * Returns all email lists from the Google Directory API, returning a list of EmailList models.
     * @return EmailList[]
     */
    public function retrieveLists(): array;
}

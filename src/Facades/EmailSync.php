<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Facades;

use Gumbo\EmailSync\Contracts\EmailSyncServiceContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Gumbo\EmailSync\Models\EmailListMutation pushList(\Gumbo\EmailSync\Models\EmailList $emailList)
 * @method static \Gumbo\EmailSync\Models\EmailList[] retrieveLists()
 * @method static \Gumbo\EmailSync\Contracts\EmailSyncServiceContract getFacadeRoot()
 * @see \Gumbo\EmailSync\Contracts\EmailSyncServiceContract
 */
class EmailSync extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return EmailSyncServiceContract::class;
    }
}

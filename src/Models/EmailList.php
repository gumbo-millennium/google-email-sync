<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * An email list, with entries and aliases.
 * @property int $id
 * @property string $email
 * @property null|string $directory_id
 * @property EmailListEntry[]|\Illuminate\Support\Collection $entries
 * @property EmailListAlias[]|\Illuminate\Support\Collection $aliases
 * @property EmailListMutation[]|\Illuminate\Support\Collection $mutations
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property null|\Illuminate\Support\Carbon $deleted_at
 */
class EmailList extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function entries(): HasMany
    {
        return $this->hasMany(EmailListEntry::class, 'list_id');
    }

    public function aliases(): HasMany
    {
        return $this->hasMany(EmailListAlias::class, 'list_id');
    }

    public function mutations(): HasMany
    {
        return $this->hasMany(EmailListMutation::class, 'list_id')->latest();
    }
}

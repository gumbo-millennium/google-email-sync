<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Models;

use Gumbo\EmailSync\Enums\ChangeDirection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * An email list change. This reflects a change made on the Google
 * Directory API after a change to an EmailList model, or vice versa.
 *
 * @property int $id
 * @property EmailList $list
 * @property ChangeDirection $direction
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property null|\Illuminate\Support\Carbon $deleted_at
 * @property EmailListMutationEntry[]|\Illuminate\Support\Collection $entries
 */
class EmailListMutation extends Model
{
    use HasFactory;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'direction' => ChangeDirection::Up,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'direction' => ChangeDirection::class,
    ];

    public function list(): BelongsTo
    {
        return $this->belongsTo(EmailList::class, 'list_id');
    }

    public function entries(): HasMany
    {
        return $this->hasMany(EmailListMutationEntry::class, 'mutation_id');
    }
}

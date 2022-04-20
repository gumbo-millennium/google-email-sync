<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Models;

use Gumbo\EmailSync\Enums\ChangeType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * An single change to a resource on the email list. Describes
 * what item was applied and what the change was.
 *
 * @property int $id
 * @property EmailListMutation $mutation
 * @property ChangeType $change
 * @property null|string $description
 * @property EmailListAlias|EmailListEntry $subject
 */
class EmailListMutationEntry extends Model
{
    use HasFactory;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'subject',
    ];

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'change' => ChangeType::Unknown,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'change' => ChangeType::class,
    ];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    public function subject(): MorphTo
    {
        return $this->morphTo();
    }

    public function mutation(): BelongsTo
    {
        return $this->belongsTo(EmailListMutation::class, 'mutation_id');
    }
}

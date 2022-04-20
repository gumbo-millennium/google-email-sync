<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * An email list alias.
 * @property int $id
 * @property EmailList $list
 * @property string $email
 * @property bool $read_only
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property null|\Illuminate\Support\Carbon $deleted_at
 */
class EmailListAlias extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'read_only' => false,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'read_only' => 'boolean',
    ];

    public function list(): BelongsTo
    {
        return $this->belongsTo(EmailList::class, 'list_id');
    }
}

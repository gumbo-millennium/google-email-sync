<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Models;

use Gumbo\EmailSync\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * An email list entry (a recipient).
 * @property int $id
 * @property EmailList $list
 * @property string $email
 * @property Role $role
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property null|\Illuminate\Support\Carbon $deleted_at
 */
class EmailListEntry extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The model's attributes.
     *
     * @var array
     */
    protected $attributes = [
        'role' => Role::Member,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'role' => Role::class,
    ];

    public function list(): BelongsTo
    {
        return $this->belongsTo(EmailList::class, 'list_id');
    }
}

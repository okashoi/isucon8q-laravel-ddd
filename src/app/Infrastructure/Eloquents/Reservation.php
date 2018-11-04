<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Torb\Infrastructure\Eloquents\Reservation
 *
 * @property int $id
 * @property int $event_id
 * @property int $sheet_id
 * @property int $user_id
 * @property string $reserved_at
 * @property string|null $canceled_at
 * @property-read \Torb\Infrastructure\Eloquents\Event $event
 * @property-read \Torb\Infrastructure\Eloquents\Sheet $sheet
 * @property-read \Torb\Infrastructure\Eloquents\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Torb\Infrastructure\Eloquents\Reservation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereCanceledAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereReservedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereSheetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Reservation whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Torb\Infrastructure\Eloquents\Reservation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Torb\Infrastructure\Eloquents\Reservation withoutTrashed()
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    use SoftDeletes;

    const DELETED_AT = 'canceled_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'sheet_id',
        'user_id',
        'reserved_at',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return BelongsTo
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * @return BelongsTo
     */
    public function sheet(): BelongsTo
    {
        return $this->belongsTo(Sheet::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

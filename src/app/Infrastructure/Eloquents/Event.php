<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Torb\Infrastructure\Eloquents\Event
 *
 * @property int $id
 * @property string $title
 * @property int $public_fg
 * @property int $closed_fg
 * @property int $price
 * @property-read \Illuminate\Database\Eloquent\Collection|\Torb\Infrastructure\Eloquents\User[] $attendees
 * @property-read \Illuminate\Database\Eloquent\Collection|\Torb\Infrastructure\Eloquents\Reservation[] $reservations
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Event whereClosedFg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Event wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Event wherePublicFg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Event whereTitle($value)
 * @mixin \Eloquent
 */
class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'public_fg',
        'closed_fg',
        'price',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return HasMany
     */
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    /**
     * @return BelongsToMany
     */
    public function attendees(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'reservations')
            ->as('reservation')
            ->withPivot('sheet_id', 'reserved_at');
    }
}

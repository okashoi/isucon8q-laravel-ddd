<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Torb\Infrastructure\Eloquents\User
 *
 * @property int $id
 * @property string $nickname
 * @property string $login_name
 * @property string $pass_hash
 * @property-read \Illuminate\Database\Eloquent\Collection|\Torb\Infrastructure\Eloquents\Reservation[] $reservations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Torb\Infrastructure\Eloquents\Event[] $reservedEvents
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\User whereLoginName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\User wherePassHash($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname',
        'login_name',
        'pass_hash',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pass_hash',
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
    public function reservedEvents(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'reservations')
            ->as('reservation')
            ->withPivot('sheet_id', 'reserved_at');
    }
}

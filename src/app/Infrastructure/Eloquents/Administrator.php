<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Torb\Infrastructure\Eloquents\Administrator
 *
 * @property int $id
 * @property string $nickname
 * @property string $login_name
 * @property string $pass_hash
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Administrator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Administrator whereLoginName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Administrator whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Administrator wherePassHash($value)
 * @mixin \Eloquent
 */
class Administrator extends Authenticatable
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
}

<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Administrator
 * @package Torb\Infrastructure\Eloquents
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

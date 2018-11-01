<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sheet
 * @package Torb\Infrastructure\Eloquents
 */
class Sheet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rank',
        'num',
        'price',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}

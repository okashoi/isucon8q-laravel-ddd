<?php

namespace Torb\Infrastructure\Eloquents;

use Illuminate\Database\Eloquent\Model;

/**
 * Torb\Infrastructure\Eloquents\Sheet
 *
 * @property int $id
 * @property string $rank
 * @property int $num
 * @property int $price
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Sheet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Sheet whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Sheet wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Torb\Infrastructure\Eloquents\Sheet whereRank($value)
 * @mixin \Eloquent
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

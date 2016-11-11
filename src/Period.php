<?php

namespace Acacha\Periods;

use Acacha\Periods\Traits\HasCalendar;
use Acacha\Periods\Traits\IsPeriodable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Period.
 *
 * @package Acacha\Periods
 */
class Period extends Model
{
    use HasCalendar;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date',
        'finish_date'
    ];
}

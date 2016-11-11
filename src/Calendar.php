<?php

namespace Acacha\Periods;

use Acacha\Periods\Traits\IsPeriodable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Calendar.
 *
 * @package Acacha\Periods
 */
class Calendar extends Model
{
    use HasPeriod, HasEvents;
}

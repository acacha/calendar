<?php

namespace Acacha\Periods;

use Acacha\Periods\Traits\IsPeriodable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Period.
 * 
 * @package Acacha\Periods
 */
class Period extends Model
{
    use IsPeriodable;
}

<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Monthly()
 * @method static self Yearly()
 */
class PlanDuration extends Enum
{
    protected static function values(): array
    {
        return [

            'Monthly' => 30,
            'Yearly' => 365,
        ];
    }
}


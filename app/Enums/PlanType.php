<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Job()
 * @method static self Featuring()
 */
class PlanType extends Enum
{
    protected static function values(): array
    {
        return [

            'Job' => 'job',
            'Featuring' => 'featuring',
        ];
    }
}


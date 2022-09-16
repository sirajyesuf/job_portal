<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Order()
 * @method static self Employer()
 * @method static self Company()
 */
class JobType extends Enum
{
    protected static function values(): array
    {
        return [

            'Order' => 'order',
            'Employer' => 'employer',
            'Company' => 'company'
        ];
    }
}


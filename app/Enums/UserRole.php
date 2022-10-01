<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self JobSeeker()
 * @method static self Employer()
 */
class UserRole extends Enum
{
    protected static function values(): array
    {
        return [

            'JobSeeker' => 'job_seeker',
            'Employer' => 'employer',
        ];
    }
}


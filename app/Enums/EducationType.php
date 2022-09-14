<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self FieldOfStudy()
 * @method static self EducationLevel()
 * @method static self CarrerLevel()
 * @method static self Profession()
 * @method static self EmploymentType()
 */
class EducationType extends Enum
{
    protected static function values(): array
    {
        return [

            'FieldOfStudy' => 'field_of_study',
            'EducationLevel' => 'education_level',
            'CarrerLevel' => 'carrer_level',
            'Profession'  => 'profession',
            'EmploymentType' => 'employment_type'
        ];
    }
}


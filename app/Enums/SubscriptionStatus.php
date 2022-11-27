<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Active()
 * @method static self Inactive()
 */
class SubscriptionStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'Active' => 1,
            'Inactive' => 0,
        ];
    }
}


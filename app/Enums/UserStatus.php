<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Pending()
 * @method static self Approve()
 * @method static self Rejecte()
 */
class UserStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'Pending' => 1,
            'Approve' => 2,
            'Rejecte' => 3,
        ];
    }
}


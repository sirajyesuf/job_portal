<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Pending()
 * @method static self Approve()
 * @method static self Rejecte()
 * @method static self Block()
 */
class UserStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'Pending' => 1,
            'Approve' => 2,
            'Rejecte' => 3,
            'Block' => 4
        ];
    }
}


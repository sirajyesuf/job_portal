<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Bank()
 * @method static self Wallet()
 */
class PaymentMethodType extends Enum
{
    protected static function values(): array
    {
        return [

            'Bank' => 'bank',
            'Wallet' => 'wallet'
        ];
    }
}


<?php

namespace App\Enums;

use \Spatie\Enum\Enum;

/**
 * @method static self Paid()
 * @method static self UnPaid()
 */
class InvoiceStatus extends Enum
{
    protected static function values(): array
    {
        return [

            'Paid' => 'paid',
            'Unpaid' => 'unpaid',
        ];
    }
}


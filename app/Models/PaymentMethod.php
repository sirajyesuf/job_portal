<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PaymentMethod extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    // protected function Logo(): Attribute
    // {
    //     if(request()->is('/employer/processed_payment/*')){

    //         dump("ji");

    //         return Attribute::make(
    //             get: fn ($value) => asset($value),
    //         );
    //     }


    //     return Attribute::make(
    //         get: fn ($value) =>asset($value),
    //     );


    // }
    
}

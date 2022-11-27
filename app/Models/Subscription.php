<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function orders(){

        return $this->belongsTo(User::class,'employer_id');
    }

    public function plan(){

        return $this->belongsTo(Plan::class,'plan_id');
    }

}

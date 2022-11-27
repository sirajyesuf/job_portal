<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function employer(){
        return $this->belongsTo(User::class,'employer_id');
    }
}

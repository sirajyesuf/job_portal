<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Skill extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    function profession(){
        return $this->belongsTo(Education::class,'profession_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Education extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function skills(){

        return $this->hasMany(Skill::class,'profession_id','id');    
    }


}

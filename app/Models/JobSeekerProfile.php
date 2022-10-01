<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeekerProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobSeeker(){

        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Oddvalue\LaravelDrafts\Concerns\HasDrafts;
use Illuminate\Database\Eloquent\Builder;

class Job extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasDrafts;

    protected $guarded = [];


    protected static function booted()
    {
        static::addGlobalScope('xxxx', function (Builder $builder) {
            $builder->where('admin_id', auth()->user()->id);
        });
    }

    
    public function categories(){

        return $this->belongsToMany(Category::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function education(){

        return $this->belongsTo(Education::class);
    }
    
}

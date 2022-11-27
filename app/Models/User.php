<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use \Spatie\Onboard\Concerns\GetsOnboarded;
use \Spatie\Onboard\Concerns\Onboardable;
use Illuminate\Database\Eloquent\SoftDeletes;
use MBarlow\Megaphone\HasMegaphone;
use App\Enums\SubscriptionStatus;
use App\Models\BaseUser;

class User extends Authenticatable implements  \Spatie\Onboard\Concerns\Onboardable,BaseUser
{
    public function isAdmin(){

        return false;
    }
    
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use \Spatie\Onboard\Concerns\GetsOnboarded;
    use SoftDeletes;
    use Notifiable;
    use HasMegaphone;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
       
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function jobSeekerProfile(){
        return $this->hasOne(JobSeekerProfile::class);
    }

    public function employerProfile(){
        return $this->hasOne(EmployerProfile::class);
    }

    public function orders(){

        return $this->hasMany(Order::class,'employer_id');
    }

    public function subscriptions(){
        
        return $this->hasMany(Subscription::class,'employer_id');
    }

    public function activePlan(){
        $subscription = $this->subscriptions()->where('status',SubscriptionStatus::Active())->first();
        return $subscription->plan();
    }

    public function isSubscriber(){

        $this->subscriptions()->where('status',SubscriptionStatus::Active())->first() ? true : false;

    }

    public function jobs(){
        return $this->hasMany(Job::class,'employer_id');
    }






}

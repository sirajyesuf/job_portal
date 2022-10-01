<?php

namespace App\Providers;

use App\Enums\UserStatus;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Spatie\Onboard\Facades\Onboard;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Onboard::addStep('Complete Company Profile')
        ->link('/employer/company')
        ->cta('here')
        /**
         * The completeIf will pass the class that you've added the
         * interface & trait to. You can use Laravel's dependency
         * injection here to inject anything else as well.
         */
        ->completeIf(function (User $model) {
            return $model->employerProfile()->count() >0 ;
        });

    Onboard::addStep('wait for approval')
        ->completeIf(function (User $model) {
            if($model->status == UserStatus::Approve()->value or $model->status == UserStatus::Rejecte()->value) return true;
            else return false;
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

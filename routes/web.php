<?php

use App\Http\Livewire\Company;
use App\Http\Livewire\Employer\Job\ListJob;
use App\Http\Livewire\Employer\Job\CreateJob;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Employer\Subscription\Plan;
use App\Http\Livewire\Employer\Subscription\Checkout;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pre_register',function(){
return  view('auth.pre_register');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('employer')->name('employer.')->middleware(['employer'])->group(function(){
        Route::get('/company',Company::class)->name('company');
        Route::get('/plans',Plan::class)->name('subscription');
        Route::get('/checkout/{plan}',Checkout::class)->name('checkout');

        //jobs
        Route::prefix('job')->name('jobs.')->group(function(){

            Route::get('/',ListJob::class)->name('list');
            Route::get('/createjob',CreateJob::class)->name('create');
            
        });
      
    });
});

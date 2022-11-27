<?php

use App\Http\Livewire\Company;
use App\Http\Livewire\Employer\Job\ListJob;
use App\Http\Livewire\Employer\Job\CreateJob;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Employer\Subscription\Plan;
use App\Http\Livewire\Employer\Subscription\Checkout;
use App\Http\Livewire\Employer\Subscription\Payment;
use App\Http\Livewire\Employer\Subscription\ConfirmYourPayment;
use App\Http\Livewire\Employer\Dashboard;
use App\Http\Livewire\Employer\Subscription\InvoiceDetail;
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
Route::get('/mailable', function () {
    $user = App\Models\User::first();
    $order = App\Models\Order::first();
 
    return new App\Mail\OrderConfirmation($order,$user);
});


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
    
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    //employer dashboard
    Route::get('/dashboard',Dashboard::class)->name('dashboard');

    Route::prefix('employer')->name('employer.')->middleware(['employer'])->group(function(){
        Route::get('/company',Company::class)->name('company');
        Route::get('/plans',Plan::class)->name('subscription');
        Route::get('/checkout/{plan}',Checkout::class)->name('checkout');
        Route::get('/processed_payment/{order}',Payment::class)->name('processed_payment');
        Route::get('/confirm_your_payment/{order}',ConfirmYourPayment::class)->name('confirm_your_payment');
        Route::get('/invoice_detail/{order}',InvoiceDetail::class)->name('invoice_detail');

        //jobs
        Route::prefix('job')->name('jobs.')->group(function(){

            Route::get('/',ListJob::class)->name('list');
            Route::get('/createjob',CreateJob::class)->name('create');
            
        });
      
    });
});




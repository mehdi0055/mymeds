<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\RdvComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CanceledRdvComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });



//Public routes
Route::get('/',HomeComponent::class)->name('landing-home');
Route::get('/about-us',AboutComponent::class)->name('landing-about');
Route::get('/contact-us',ContactComponent::class)->name('landing-contact');

Route::get('/cancelrendezvous/{idRdv}',CanceledRdvComponent::class)->name('cancel-rendezvous');







//Language change

Route::get('/language/{local}',function($local){
    App::setLocale($local);
    session(['lang'=>$local]);
    return back();
})->name('change-language');


//Admin Routes
Route::middleware('auth','auth:sanctum','adminauth')->group(function(){

    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin-dashboard');
    Route::get('/admin/rendez_vous',RdvComponent::class)->name('admin-rendez_vous');

});


//Route users
Route::middleware('auth','auth:sanctum')->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user-dashboard');

});



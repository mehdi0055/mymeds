<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\rdvs\AdminRdvComponent;
use App\Http\Livewire\Admin\users\AdminUsersComponent;
use App\Http\Livewire\Admin\users\AdminEditUsersComponent;
use App\Http\Livewire\Admin\users\AdminAddUsersComponent;
use App\Http\Livewire\Admin\demandes\AdminDemandesComponent;
use App\Http\Livewire\Admin\demandes\AdminDemandeShowComponent;
use App\Http\Livewire\Admin\blogs\AdminBlogComponent;
use App\Http\Livewire\Admin\Cabinets\AdminAddCabinetComponent;
use App\Http\Livewire\Admin\Cabinets\AdminCabinetsComponent;
use App\Http\Livewire\Admin\Cabinets\AdminEditCabinetComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DepartmentComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CanceledRdvComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get('/department',DepartmentComponent::class)->name('landing-department');
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
    Route::get('/admin/rendez_vous',AdminRdvComponent::class)->name('admin-rendez_vous');
    Route::get('/admin/blogs',AdminBlogComponent::class)->name('admin-blogs');

    //Users
    Route::get('/admin/users',AdminUsersComponent::class)->name('admin-users');
    Route::get('/admin/user/edit/{idUser}',AdminEditUsersComponent::class)->name('admin-editUser');
    Route::get('/admin/user/add',AdminAddUsersComponent::class)->name('admin-addUser');

    //Demandes
    Route::get('/admin/demandes/all',AdminDemandesComponent::class)->name('admin-demandes-all');
    Route::get('//admin/demandes/show/{idDemande}',AdminDemandeShowComponent::class)->name('admin-demandes-show');



    //Cabinets
    Route::get('/admin/cabinets/all',AdminCabinetsComponent::class)->name('admin-cabinets-all');
    Route::get('/admin/cabinets/add',AdminAddCabinetComponent::class)->name('admin-add-cabinet');
    Route::get('/admin/cabinet/{slug}/edit',AdminEditCabinetComponent::class)->name('admin-edit-cabinet');



    Route::get('/color/{color}',function($color){
        $user = User::find( auth()->user()->id);
        $user->theme = $color;
        $user->save();
        return redirect()->route('admin-dashboard');
    })->name('change-color');

});



//Route users
Route::middleware('auth','auth:sanctum')->group(function(){

    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user-dashboard');

});



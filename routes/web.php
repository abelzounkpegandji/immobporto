
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LocationComponent;
use App\Http\Livewire\AchatComponent;
use App\Http\Livewire\PublicationComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get('/',HomeComponent::class);
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('immobporto');
});

Route::get('/Location',LocationComponent::class);
Route::get('/Achat',AchatComponent::class);
Route::get('/Publication',PublicationComponent::class);


/*
Route::get('/',HomeComponent::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/

//for user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
   
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//for Admin  
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('adming/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
});

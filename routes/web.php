<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeSectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(AdminController::class)->group(function (){
   Route::get('/admin/logout','AdminLogout')->name('admin.logout');
   Route::get('/admin/profile','AdminProfile')->name('admin.profile');
   Route::post('/admin/profile/store','AdminProfileStore')->name('admin.profile.store');
   Route::get('/change/password','ChangePassword')->name('change.password');
   Route::post('/update/password','UpdatePassword')->name('update.password');
});

Route::controller(HomeSectionController::class)->group(function (){
    Route::get('/home/slide','HomeSlider')->name('home.slide');
    Route::post('/home/update','UpdateHome')->name('update.home');
 });
 


require __DIR__.'/auth.php';
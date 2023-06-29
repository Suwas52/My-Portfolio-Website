<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\SkillsSectionController;
use App\Http\Controllers\ServicesSectionController;
use App\Http\Controllers\PortfolioSectionController;

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
})->name('main-page');

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

Route::controller(AboutSectionController::class)->group(function (){
    Route::get('/about','AboutPart')->name('about.part');
    Route::get('/all/about/page','AllAboutPage')->name('all.about.page');
    Route::post('/update/about/section','UpdateAbout')->name('update.about');
 });
Route::controller(SkillsSectionController::class)->group(function (){
    Route::get('/all/skills/title','AllSkillsTitle')->name('all.skills.title');
    Route::get('/add/skill/title','AddSkillTitle')->name('add.skill_title');
    Route::post('/store/skill/title','StoreSkillTitle')->name('store.skill_title');
    Route::get('/edit/skill/title/{id}','EditSkillTitle')->name('edit.skill_title');
    Route::post('/update/skill/title','UpdateSkillTitle')->name('update.skill_title');
    
    //skill data part
    Route::get('/all/skill/data/{id}','AllSkillData')->name('all.skill_data');
    Route::get('/add/skill/{id}','AddSkill')->name('add.skill');
    Route::post('/store/skill/data','StoreSkillData')->name('store.skill_data');
    Route::get('/edit/skill/data/{id}','EditSkillData')->name('edit.skill_data');
    Route::post('/update/skill/data','UpdateSkillData')->name('update.skill_data');
    Route::get('/delete/skill/data/{id}','DeleteSkillData')->name('delete.skill_data');

    
 });


Route::controller(ServicesSectionController::class)->group(function (){
    Route::get('/services','ServicesSection')->name('services.section');

 });


Route::controller(PortfolioSectionController::class)->group(function (){
    Route::get('/portfolio','PortfolioSection')->name('portfolio.section');
    Route::get('/all/portfolio/title','AllPortfolioTitle')->name('all.portfolio_title');
    Route::get('/add/portfolio/title','AddPortfolioTitle')->name('add.portfolio_title');
    Route::post('/store/portfolio/title','StorePortfolioTitle')->name('store.portfolio_title');
    Route::get('/edit/portfolio/title/{id}','EditPortfolioTitle')->name('edit.portfolio_title');
    Route::post('/update/portfolio/title','UpdatePortfolioTitle')->name('update.portfolio_title');
    
    
    // Portfolio part
    Route::get('/all/portfolios','AllPortfolios')->name('all.portfolios');
    Route::get('/add/portfolios','AddPortfolios')->name('add.portfolios');
    Route::post('/store/portfolios','StorePortfolios')->name('store.portfolios');



 });
 


require __DIR__.'/auth.php';
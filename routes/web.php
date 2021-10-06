<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Route::view('/', 'pages.home');

Route::get('/',[HomeController::class, 'index'])->name('index');

Route::get('/about',[HomeController::class, 'about'])->name('about');

// Route::get('/realestate',[HomeController::class, 'realestate'])->name('realestate');

Route::get('/realestate/{slug}',[HomeController::class, 'single'])->name('realestateDetail');

Route::get('/search',[HomeController::class, 'search'])->name('realestateSearch');

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/team',[HomeController::class, 'team'])->name('team');

Route::get('/partnership',[HomeController::class, 'partnership'])->name('partnership');

Route::get('/philosophy',[HomeController::class, 'philosophy'])->name('philosophy');

Route::get('/maps',[HomeController::class, 'maps'])->name('maps');

Route::get('/category/{type}',[HomeController::class, 'type'])->name('showType');

Route::get('category/{type}/{status}',[HomeController::class, 'multi'])->name('multi');

Route::get('/area/{area}',[HomeController::class, 'area'])->name('showArea');


Auth::routes();

// admin here
Route::get('/admin', [AdminController::class, 'admin'])->name('adminDashboard');

Route::get('/input', [AdminController::class, 'input'])->name('inputDashboard');

Route::post('/add', [AdminController::class, 'add'])->name('add');

Route::post('/update', [AdminController::class, 'update'])->name('update');

Route::get('/realestate/edit/{id}', [AdminController::class, 'edit'])->name('edit');

Route::get('/realestate/delete/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('/realestate/sold/{id}', [AdminController::class, 'sold'])->name('sold');
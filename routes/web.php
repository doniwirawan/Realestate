<?php

use App\Http\Controllers\Home\HomeController;
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


// Route::view('/', 'pages.home');

Route::get('/',[HomeController::class, 'index'])->name('index');

Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::get('/realestate',[HomeController::class, 'realestate'])->name('realestate');

Route::get('/realestate/{slug}',[HomeController::class, 'single'])->name('realestateDetail');

Route::get('/contact',[HomeController::class, 'contact'])->name('contact');

Route::get('/maps',[HomeController::class, 'maps'])->name('maps');
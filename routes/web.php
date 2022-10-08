<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/product',[PagesController::class,'product'])->name('product'); 
Route::get('/teams', [PagesController::class, 'teams'])->name('teams');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::get('/logout', [PagesController::class, 'logout'])->name('logout');
Route::post('/Validate_registration', [PagesController::class, 'Validate_registration'])->name('PagesController.Validate_registration');
Route::post('/Validate_login', [PagesController::class, 'Validate_login'])->name('PagesController.Validate_login');
Route::post('/Validate_contact', [PagesController::class, 'Validate_contact'])->name('PagesController.Validate_contact');
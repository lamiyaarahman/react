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

Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
Route::get('/course', [PagesController::class, 'course'])->name('course');
Route::get('/search', [PagesController::class, 'search'])->name('search');
Route::get('/sidenav', [PagesController::class, 'sidenav'])->name('sidenav');
Route::get('/pagination', [PagesController::class, 'pagination'])->name('pagination');
Route::get('/registeredInstructor', [PagesController::class, 'registeredInstructor'])->name('registeredInstructor');

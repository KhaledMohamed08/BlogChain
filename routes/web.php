<?php

use App\Http\Controllers\Site\Auth\AuthController;
use App\Http\Controllers\Site\Blogs\BlogController;
use App\Http\Controllers\Site\Pages\PagesController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect('/home');
});
Route::get('home', function () {
    return view('Site.home');
})->name('home');
Route::get('contact', [PagesController::class, 'contactPage'])->name('contact.page');
Route::get('about', [PagesController::class, 'aboutPage'])->name('about.page');

Route::resource('blog', BlogController::class);
// Auth Protected Routes
Route::middleware('auth')->group( function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
// Guest Protected Routes
Route::middleware('guest')->group( function () {
    // Auth Routes
    Route::get('register', [AuthController::class, 'registerForm'])->name('register.form');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('login', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
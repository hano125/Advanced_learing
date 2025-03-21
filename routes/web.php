<?php

use App\Http\Controllers\frontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
    return view('front.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
//front route
Route::controller(frontController::class)->prefix('front')->name('front.')->group(function () {
    Route::get("index", 'index')->name('index');
    Route::get("contact", action: 'contact')->name("contact");
    Route::get("about", action: 'about')->name("about");
    Route::get("service", action: 'service')->name("service");
});
Route::name("admin.")->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(
        function () {
            Route::view('index', "admin.index")->name('index');
            //Route::view('login', "admin.login")->name('login');
        }
    );
require __DIR__ . '/auth.php';

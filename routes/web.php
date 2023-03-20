<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\DashboardController;

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
Route::group(['prefix' => 'webadmin'], function () {

    Route::name('webadmin.')->group(function () {
        Auth::routes();
        // Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        // Route::post('register', [RegisterController::class, 'register'])->name('create');
        Route::middleware('auth')->group(function () {
            // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('blogcategories', BlogCategoryController::class);
            Route::resource('blogtags', BlogTagController::class);
            Route::resource('authors', AuthorController::class);
            Route::resource('blogs', BlogController::class);
            // Route::resource('blogs', CommentController::class);
        });
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

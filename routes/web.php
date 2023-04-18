<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/work', [App\Http\Controllers\HomeController::class, 'work'])->name('work');
Route::get('/hiredev', [App\Http\Controllers\HomeController::class, 'hiredev'])->name('hiredev');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');



Route::group(['middleware' => ['IsAdmin']], function(){

    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::get('/requests', [App\Http\Controllers\AdminController::class, 'requests'])->name('requests');
    Route::post('/admin', [App\Http\Controllers\AdminController::class, 'postset'])->name('postset');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

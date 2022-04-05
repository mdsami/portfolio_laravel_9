<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
// use App\Http\Controllers\Frontend\UBIDController;
// use App\Http\Controllers\Frontend\UBIDController;
// use App\Http\Controllers\Frontend\UBIDController;
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

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('resume', [HomeController::class, 'resume'])->name('resume');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
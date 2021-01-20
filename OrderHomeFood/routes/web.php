<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\menuOrder\MealController;
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
/**The two routes for register below are for: . the get one is to show the from and the post one is for submitting/posting the form */
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

/** The two routes for login below are for: . the get one is to show the from and the post one is for submitting/posting the form*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


/** This route is for loging out from the account */
Route::post('/logout', [LogoutController::class, 'index'])->name('logout');


/** This route to get the info/data from MealController */
Route::get('/menu', [MealController::class, 'index'])->name('menu');
Route::get('/mealDetails', [MealController::class, 'showTotal']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('home');
// });

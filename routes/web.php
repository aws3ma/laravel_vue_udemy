<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TestController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/page/{id}',[HomeController::class, 'page']);
Route::get('/contact-us',[ContactUsController::class, 'index']);
Route::post('/contact-us',[ContactUsController::class, 'form']);
Route::get('/vue',[TestController::class, 'helloVue']);

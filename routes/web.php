<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
    // try {
    //     DB::connection()->getPdo();
    //     echo 'worked';
    // } catch (\Exception $e) {
    //     die("twerked" . $e);
    // }
});
Route::get('/helloWorld/{id}',function($id) {
    echo 'hello world '.$id;
});
Route::get('test',[TestController::class, 'test1']);

<?php

use App\Http\Controllers\GradesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('grades', 'GradeController@index');
Route::get('grades',[GradesController::class,'subGradList']);
Route::get('/gardessearch', function () {
    return view('gardessearch');
});
Route::post('grades',[GradesController::class,'filterSubGradList']);

Route::get('/calculator', function () {
    return view('steel-weight-calculator');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/sendaquery', function () {
    return view('sendaquery');
});


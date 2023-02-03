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

Route::get('/brightbar', function () {
    return view('products.brightbar');
});
Route::get('/precisionshaftabr', function () {
    return view('products.precisionshaftabr');
});

Route::get('/duplexsteels', function () {
    return view('products.duplexsteels');
});
Route::get('/precipitation-hardening-steel', function () {
    return view('products.precipitation-hardening-steel');
});
Route::get('/threadedbars', function () {
    return view('products.threadedbars');
});
Route::get('/hot-rolled-round-bars', function () {
    return view('products.hot-rolled-round-bars');
});
Route::get('/forged-proof-machined-bars', function () {
    return view('products.forged-proof-machined-bars');
});
Route::get('/equal-angles', function () {
    return view('products.equal-angles');
});
Route::get('/unequal-angles', function () {
    return view('products.unequal-angles');
});
Route::get('/flat-bars', function () {
    return view('products.flat-bars');
});
Route::get('/cold-drawn-flat-bars', function () {
    return view('products.cold-drawn-flat-bars');
});
Route::get('/channels', function () {
    return view('products.channels');
});
Route::get('/hot-rolled-round-corner-squares', function () {
    return view('products.hot-rolled-round-corner-squares');
});
Route::get('/square-bright-bars', function () {
    return view('products.square-bright-bars');
});
Route::get('/hexagonal-bright-bars', function () {
    return view('products.hexagonal-bright-bars');
});
Route::get('/continuous-cast-billets-blooms', function () {
    return view('products.continuous-cast-billets-blooms');
});
Route::get('/forging-quality-ingots', function () {
    return view('products.forging-quality-ingots');
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


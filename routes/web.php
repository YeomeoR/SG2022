<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('/layouts/master');
});
// home
Route::get('/', function () {
    return view('home');
});
// services
Route::get('/services', function () {
    return view('services');
});
// e-learning
Route::get('/e_learning', function () {
    return view('e_learning');
});
// contact
Route::get('/contact', [ContactController::class, 'createContact']);
Route::post('/contact', [ContactController::class, 'saveContact'])->name('createContact');
Route::get('/subscribe', [ContactController::class, 'createSubscriber']);
Route::post('/subscribe', [ContactController::class, 'saveSubscriber'])->name('subscriber');

<?php

use App\Http\Controllers\ArticalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepoisterController;
use App\Http\Controllers\HomeController;
use App\Models\Depoister;
use Illuminate\Support\Facades\Artisan;
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
// Route::get('/',[HomeController::class,'maintainnce'])->name('home');
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return redirect()->route('home');
 });

 Route::get('/clear-route', function() {
    $exitCode = Artisan::call('route:clear');
    return redirect()->route('home');
 });

 Route::get('/clear-config', function() {
    $exitCode = Artisan::call('config:clear');
    return redirect()->route('home');
 });

 Route::get('/cache-config', function() {
    $exitCode = Artisan::call('config:cache');
    return redirect()->route('home');
 });

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/currency-change',[HomeController::class,'currency'])->name('currency');
Route::get('/education',[HomeController::class,'education'])->name('education');
Route::get('/education/watch',[HomeController::class,'playlist'])->name('playlist');
Route::get('/news',[HomeController::class,'news'])->name('news');
Route::get('/econimic/calender',[HomeController::class,'calender'])->name('calender');
Route::get('/accounts',[HomeController::class,'accounts'])->name('accounts');
Route::get('/analytical',[ArticalController::class,'index'])->name('articals');
Route::get('/analytical/post/{id}',[ArticalController::class,'show'])->name('articals.post');
Route::get('/chart/forex',[HomeController::class,'forex'])->name('forex');

Route::get('/local-depositor-hfm',[DepoisterController::class,'index'])->name('corporate');
Route::post('/local-depositor-hfm/new',[DepoisterController::class,'store'])->name('corporate.store');

Route::get('/contact-us',[ContactController::class,'index'])->name('contact');
Route::post('/contact-us/submit',[ContactController::class,'store'])->name('contact.store');
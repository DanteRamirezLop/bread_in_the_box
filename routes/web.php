<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MessageController;

Route::get('/',[HomeController::class,'index'])->name('home');
//Product
Route::get('/order-online',[ProductController::class,'orden'])->name('orden');
Route::get('/product/{product}',[ProductController::class,'show'])->name('products.show');
Route::get('/monthly-specialty-breads',[ProductController::class,'monthlySpecialtyBreads'])->name('monthly.specialty');
Route::get('/international-breads',[ProductController::class,'international'])->name('international');
Route::get('/desserts',[ProductController::class,'desserts'])->name('desserts');
Route::get('/retail',[ProductController::class,'rentail'])->name('retail');
//Pages
Route::get('/about-us',[PageController::class,'about'])->name('about');
Route::get('/contact-us',[PageController::class,'contact'])->name('contact');
Route::get('/questions',[PageController::class,'questions'])->name('questions');
Route::get('/become-a-distribuidor',[PageController::class,'becomeDealer'])->name('becomeDealer');
Route::get('/careers',[PageController::class,'careers'])->name('careers');
Route::get('/terms-and-condition',[PageController::class,'conditions'])->name('conditions');
//Dealer
Route::get('/distributors',[DealerController::class,'index'])->name('distributors');
//Message
Route::post('/menssage',[MessageController::class,'menssage'])->name('menssage');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

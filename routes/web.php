<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
 
Route::get('/menu',[MenuController::class,'Menu']);
Route::get('/menu_details',[MenuController::class,'MenuDetails']);
Route::get('/cart_view',[MenuController::class,'CartView']);
Route::get('/check_out',[MenuController::class,'CheckOut']);
Route::get('/contact',[MenuController::class,'Contact']);
Route::get('/forgot_password',[MenuController::class,'ForgotPassword']);
Route::get('/payment',[MenuController::class,'Payment']); 
Route::get('/404',[MenuController::class,'Error']);
Route::get('/sign_in',[MenuController::class,'SignIn']);
Route::get('/sign_up',[MenuController::class,'SignUp']);



 
require __DIR__.'/auth.php';

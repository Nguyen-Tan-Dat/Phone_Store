<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('home');
});
Route::get("/home", function () {
    return view("home");
});
Route::get("/product_details", function () {
    return view("product-details");
});
Route::get("/user", function () {
    return view("user");
});
Route::get("/cart", function () {
    return view("cart");
});
Route::get("/forgot-password", function () {
    return view("forgot-password");
});
Route::get('admin', [UsersController::class, 'admin'])->name('users.admin');
Route::get('admin-login', [UsersController::class, 'adminLoginPage'])->name('users.admin');
Route::get('confirm-email', [UsersController::class, 'confirmEmail'])->name('users.confirmEmail');
Route::get('new-password', [UsersController::class, 'newPassword'])->name('users.newPassword');
Route::get('user-update-info', [UsersController::class, 'confirmEmail'])->name('users.updateInfo');
Route::get('user-change-password', [UsersController::class, 'changePassword'])->name('users.changePassword');
Route::get('forget-password', [UsersController::class, 'changePassword'])->name('users.changePassword');

Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});
Route::get('/google/auth',  [UsersController::class, 'loginWithGoogle'])->name('users.loginWithGoogle');
Route::get('/facebook/auth',  [UsersController::class, 'loginWithFacebook'])->name('users.loginWithGoogle');




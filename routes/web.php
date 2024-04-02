<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\User\StudentController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/logout', function () {
    Auth::logout();

    return redirect()->route('user.login');
})->name('logout');
Route::get('login', [UserController::class, 'login'])->name('user.login');
Route::post('login', [UserController::class, 'check_login']);
Route::get('register', [UserController::class, 'register'])->name('user.register');
Route::post('register', [UserController::class, 'Check_register']);
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [admincontroller::class, 'index'])->name('admin.home');
    Route::resources([
        'user' => usercontroller::class,
    ]);
});
Route::group(['prefix' => 'student', 'middleware' => 'auth'], function () {
    route::get('/', [StudentController::class, 'index'])->name('student.index');
    route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
});

<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});

// Login & Register
Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login_store');
// Route::get('register', [\App\Http\Controllers\Auth\LoginController::class, 'showRegisterForm'])->name('register');
// Route::post('register', [\App\Http\Controllers\Auth\LoginController::class, 'register'])->name('register_store');


Route::middleware(['auth'])->group(function(){
    // Home Page or Dashboard
    Route::get('home', function(){
        return view('admin.home',[
            'userCount' => \App\Models\User::count(),
            'smCount' => \App\Models\SuratMasuk::whereMonth('created_at', '=', date('m'))->count(),
            'skAcc' => \App\Models\SuratKeluar::whereNull('sk_no_surat')->whereMonth('created_at', '=', date('m'))->count(),
            'skWait' => \App\Models\SuratKeluar::whereNotNull('sk_no_surat')->whereMonth('created_at', '=', date('m'))->count(),
        ]);
    })->name('home');

    // Role
    Route::resource('role', \App\Http\Controllers\Admin\GroupController::class)->except(['show']);

    // User
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class)->except(['show']);

    // Logout
    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});


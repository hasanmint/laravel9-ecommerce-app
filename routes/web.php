<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Frontend\FrontendController;

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



/*===========|Frontend Routes|==========*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::middleware(['auth','role:admin'])->group(function (){
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin');
// });

Route::middleware(['auth','role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'dashboard']);
});








require __DIR__.'/auth.php';

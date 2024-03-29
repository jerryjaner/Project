<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FamilyProfileController;

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

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('fetchall', [UserController::class, 'fetchAll'])->name('fetchAll');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/familyprofile', [FamilyProfileController::class, 'index'])->name('familyprofile.index');
    Route::post('/familyprofile/store', [FamilyProfileController::class, 'store'])->name('familyprofile.store');
    Route::get('/familyprofile/fetch',[FamilyProfileController::class, 'fetch'])->name("familyprofile.fetch");
    Route::get('/familyprofile/view', [FamilyProfileController::class, 'view'])->name('familyprofile.view');
    Route::delete('/familyprofile/delete', [FamilyProfileController::class, 'delete'])->name('familyprofile.delete');
    Route::get('/familyprofile/edit', [FamilyProfileController::class, 'edit'])->name('familyprofile.edit');
    Route::post('/familyprofile/update', [FamilyProfileController::class, 'update'])->name('familyprofile.update');


});

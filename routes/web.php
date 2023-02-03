<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Logout;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('userdata', [App\Http\Controllers\usercontroller::class, 'index'])->name('index');
Route::post('store', [App\Http\Controllers\usercontroller::class, 'store'])->name('store');
Route::get('usertable', [App\Http\Controllers\usercontroller::class, 'create'])->name('create');
Route::get('editdata/{id}', [App\Http\Controllers\usercontroller::class, 'edit'])->name('edit');
Route::post('updatedata/{id}', [App\Http\Controllers\usercontroller::class, 'update'])->name('update');
Route::get('deletedata/{id}', [App\Http\Controllers\usercontroller::class, 'destroy']);
Route::get('logout', [App\Http\Controllers\usercontroller::class, 'logout'])->name('logout');
Route::get('profile', [App\Http\Controllers\usercontroller::class, 'profile'])->name('profile');
Route::get('editprofile', [App\Http\Controllers\usercontroller::class, 'profiledata'])->name('profiledata');
Route::post('profstore', [App\Http\Controllers\usercontroller::class, 'profstore'])->name('profstore');
//Route::get('editprofile', [App\Http\Controllers\usercontroller::class, 'profiledata'])->name('profiledata');
Route::get('profile/{id}', [App\Http\Controllers\usercontroller::class, 'show'])->name('show');

//Route::get('userdata/list', [usercontroller::class, 'index'])->name('userdata.list');


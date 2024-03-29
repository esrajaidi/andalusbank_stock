<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashbored\DashboradController;

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
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {

    Route::namespace('Dashbored')->group(function () {
    Route::get('dashboradhome', [DashboradController::class, 'index'])->name('dashboradhome');
    Route::get('users', [App\Http\Controllers\Dashbored\UserController::class, 'index'])->name('users');
    Route::get('users/create', [App\Http\Controllers\Dashbored\UserController::class, 'create'])->name('users/create');
    Route::post('users/create', [App\Http\Controllers\Dashbored\UserController::class, 'store'])->name('users/store');
    Route::get('users/show/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'show'])->name('users/show');
    Route::get('users/edit/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'edit'])->name('users/edit');
    Route::POST('users/edit/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'update'])->name('users/update');
    Route::get('/change-password', [App\Http\Controllers\Dashbored\UserController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [App\Http\Controllers\Dashbored\UserController::class, 'updatePassword'])->name('update-password');
    Route::delete('users/destroy/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'destroy'])->name('users/destroy');
    Route::get('users/changeStatus/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'changeStatus'])->name('users/changeStatus');
// Route::get('users/profile/{id}', [App\Http\Controllers\Dashbored\UserController::class, 'show'])->name('users/profile');
// *********************roles**********************
    Route::get('roles', [App\Http\Controllers\Dashbored\RoleController::class, 'index'])->name('roles');
    Route::get('roles/create', [App\Http\Controllers\Dashbored\RoleController::class, 'create'])->name('roles/create');
    Route::post('roles/create', [App\Http\Controllers\Dashbored\RoleController::class, 'store'])->name('roles/store');
    Route::get('roles/show/{id}', [App\Http\Controllers\Dashbored\RoleController::class, 'show'])->name('roles/show');
    Route::get('roles/edit/{id}', [App\Http\Controllers\Dashbored\RoleController::class, 'edit'])->name('roles/edit');
    Route::POST('roles/edit/{id}', [App\Http\Controllers\Dashbored\RoleController::class, 'update'])->name('roles/update');
    Route::delete('roles/destroy/{id}', [App\Http\Controllers\Dashbored\RoleController::class, 'destroy'])->name('roles/destroy');
    // *********************branches**********************
    Route::get('branches', [App\Http\Controllers\Dashbored\BranchesController::class, 'index'])->name('branches');
    Route::get('branches/create', [App\Http\Controllers\Dashbored\BranchesController::class, 'create'])->name('branches/create');
    Route::post('branches/create', [App\Http\Controllers\Dashbored\BranchesController::class, 'store'])->name('branches/store');
    Route::get('branches/edit/{id}', [App\Http\Controllers\Dashbored\BranchesController::class, 'edit'])->name('branches/edit');
    Route::POST('branches/edit/{id}', [App\Http\Controllers\Dashbored\BranchesController::class, 'update'])->name('branches/update');
    Route::get('branches/changeStatus/{id}', [App\Http\Controllers\Dashbored\BranchesController::class, 'changeStatus'])->name('branches/changeStatus');

        // *********************assets**********************
    Route::get('assets', [App\Http\Controllers\Dashbored\AssetsController::class, 'index'])->name('assets');
    Route::get('assets/create', [App\Http\Controllers\Dashbored\AssetsController::class, 'create'])->name('assets/create');
    Route::post('assets/create', [App\Http\Controllers\Dashbored\AssetsController::class, 'store'])->name('assets/store');
    Route::get('assets/edit/{id}', [App\Http\Controllers\Dashbored\AssetsController::class, 'edit'])->name('assets/edit');
    Route::POST('assets/edit/{id}', [App\Http\Controllers\Dashbored\AssetsController::class, 'update'])->name('assets/update');
    Route::get('assets/changeStatus/{id}', [App\Http\Controllers\Dashbored\AssetsController::class, 'changeStatus'])->name('assets/changeStatus');

});
});
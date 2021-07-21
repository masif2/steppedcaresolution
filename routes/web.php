<?php

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

    if(auth()->user()){
    return redirect('dashboard');
    }else{
        return redirect('login');
    }
   
});
Route::get('/activate_account/{id}', [App\Http\Controllers\GuestUserController::class, 'activate_user_account'])->name('activate_user_account');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//
Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function(){


    //
    Route::group(['prefix' => 'users',  'middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\UserController::class,'index'])->name('dashboard.users');
    Route::get('/create', [App\Http\Controllers\UserController::class,'create'])->name('dashboard.user.create');
    Route::post('/store', [App\Http\Controllers\UserController::class,'store'])->name('dashboard.user.store');
    Route::get('/edit', [App\Http\Controllers\UserController::class,'edit'])->name('dashboard.user.edit');
    Route::post('/update', [App\Http\Controllers\UserController::class,'update'])->name('dashboard.user.update');
    Route::get('/view', [App\Http\Controllers\UserController::class,'show'])->name('dashboard.user.view');
    Route::get('/user/{id?}', [App\Http\Controllers\UserController::class,'delete'])->name('dashboard.user.delete');
});//

    //
    Route::group(['prefix' => 'forms',  'middleware' => 'auth'], function(){

        Route::get('/', [App\Http\Controllers\FormController::class,'index'])->name('dashboard.forms');
        Route::get('/create', [App\Http\Controllers\FormController::class,'create'])->name('dashboard.form.create');
        Route::post('/edit', [App\Http\Controllers\FormController::class,'store'])->name('dashboard.form.edit');
        Route::get('/show', [App\Http\Controllers\FormController::class,'edit'])->name('dashboard.form.show');
        Route::post('/delete/{id}', [App\Http\Controllers\FormController::class,'update'])->name('dashboard.form.delete');

    });//
    
  //
  Route::group(['prefix' => 'project',  'middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\ProjectController::class,'index'])->name('dashboard.projects');
    Route::get('/create', [App\Http\Controllers\ProjectController::class,'create'])->name('dashboard.project.create');
    Route::post('/store', [App\Http\Controllers\ProjectController::class,'store'])->name('dashboard.project.store');
    Route::get('/edit', [App\Http\Controllers\ProjectController::class,'edit'])->name('dashboard.project.edit');
    Route::post('/update', [App\Http\Controllers\ProjectController::class,'update'])->name('dashboard.project.update');
    Route::get('/view', [App\Http\Controllers\ProjectController::class,'edit'])->name('dashboard.project.view');
    Route::delete('/project/{id?}', [App\Http\Controllers\ProjectController::class,'delete'])->name('dashboard.project.delete');
});//


});

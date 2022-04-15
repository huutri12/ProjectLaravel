<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MenuController;


Route::get('admin/users/login',[LoginController::class,'index'])->name('login');

Route::post('admin/users/login/store',[LoginController::class,'store']);


Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){

        Route::get('main',[MainController::class, 'index'])->name('admin');

        Route::prefix('menu')->group(function(){
            Route::get('add',[MenuController::class, 'create']);
            Route::get('list',[MenuController::class, 'list']);
        });
    });


});






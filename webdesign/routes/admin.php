<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;


Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin/login',[LoginController::class,'index'])->name('admin.login_form');    
    Route::post('/login', [LoginController::class,'adminLogin']);
   
// secure route is here
    Route::group(['middleware'=>'auth:admin','prefix'=>'admin', 'as'=>'admin.'],function(){
        Route::get('/dashboard', [DashboardController::class,'dashboardView'])->name('dashboard');
        Route::get('/dashboard/chart', [DashboardController::class, 'getChartData'])->name('dashboard.chart');

        
        Route::post('logout', [LoginController::class,'logout'])->name('logout');
        Route::get('/change/password/form', [DashboardController::class,'changePasswordForm'])->name('change_password_form');
        Route::post('/change/password', [DashboardController::class,'changePassword'])->name('change_password');
        // all routes after this.
        Route::get('/contact', [DashboardController::class,'contactform'])->name('contact.data');
        // Delete message
        Route::delete('/admin/contact/{id}', [DashboardController::class, 'destroyformdata'])->name('contact.delete'); 






    });
// secure route


});
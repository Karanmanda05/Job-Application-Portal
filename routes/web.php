<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeerController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ApplicantJobController;
use App\Http\Controllers\ApplicantProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('Login');
});

Route::get('/register', function(){
    return view('Register');
});

Route::get('/applicant', function(){
    return view('ApplicantDashboard');
});

Route::get('/employeer', function(){
    return view('EmployeerDashboard');
});

Route::get('/empProfile' , function(){
    return view('ProfileList');
});

Route::get('/employeerform' , function(){
    return view('EmployeerForm');
});

Route::get('/jobpost' , function(){
    return view('JobPost');
});

Route::resource('main', MainController::class);
Route::post('/auth', [AuthController::class, 'checklogin'])->name('auth.check');

Route::resource('emp' , EmployeerController::class);
Route::resource('job' , JobPostController::class);
Route::resource('aplicant' , ApplicantJobController::class);
Route::resource('aplicantpro' , ApplicantProfileController::class);

<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::get('lang', [LanguageController::class, 'change'])->name("change.lang");

        Route::get('/{lang}',[HomeController::class, 'index'])->name('home');
        Route::get('/{lang}/about',[HomeController::class, 'about'])->name('about');
        Route::get('{lang}/team',[HomeController::class, 'team'])->name('team');
        Route::get('{lang}/services',[HomeController::class, 'services'])->name('services');
        Route::get('{lang}/service/{id}',[HomeController::class, 'one_service'])->name('one.service');
        Route::get('{lang}/projects',[HomeController::class, 'projects'])->name('projects');
        Route::get('{lang}/project/{id}',[HomeController::class, 'one_project'])->name('one.project');
        Route::get('{lang}/contactus',[HomeController::class, 'contactus'])->name('contactus');
        Route::get('{lang}/team',[HomeController::class, 'team'])->name('contactus');


// Auth routes outside the locale group
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);



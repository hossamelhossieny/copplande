<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;

Route::redirect('/', '/en')->name('home');

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
        Route::get('{lang}/page/{id}',[HomeController::class, 'page'])->name('page');
    
        Route::post('{lang}/contact', [ContactController::class, 'submit'])->name('contact.submit');


require __DIR__.'/auth.php';

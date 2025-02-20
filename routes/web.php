<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;


Route::get('lang', [LanguageController::class, 'change'])->name("change.lang");

    Route::get('/',[HomeController::class, 'index'])->name('home');

    Route::get('home',[HomeController::class, 'index'])->name('home');
    Route::get('about',[HomeController::class, 'about'])->name('about');
    Route::get('team',[HomeController::class, 'team'])->name('team');
    Route::get('services',[HomeController::class, 'services'])->name('services');
    Route::get('service/{id}',[HomeController::class, 'one_service'])->name('one.service');
    Route::get('projects',[HomeController::class, 'projects'])->name('projects');
    Route::get('project/{id}',[HomeController::class, 'one_project'])->name('one.project');
    Route::get('contactus',[HomeController::class, 'contactus'])->name('contactus');


    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);




Route::middleware('auth')->group(function(){
    Route::get('do_logout', [HomeController::class, 'do_logout'])->name('do_logout');

    // Admin Dashboard Route
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Customer Dashboard Route
    Route::middleware(['role:customer'])->group(function () {
        Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
    });

    // Customer Dashboard Route
    Route::middleware(['role:manager'])->group(function () {
        Route::get('/manager/dashboard', [ManagerController::class, 'index'])->name('manager.dashboard');
    });

    // Home Route


    Route::get('/logout', function(){
        Auth::logout();
    });
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('services', [AdminController::class, 'indexServices'])->name('admin.services.index');
    Route::get('services/create', [AdminController::class, 'createService'])->name('admin.services.create');
    Route::post('services', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::get('services/{service}/edit', [AdminController::class, 'editService'])->name('admin.services.edit');
    Route::put('services/{service}', [AdminController::class, 'updateService'])->name('admin.services.update');
    Route::delete('services/{service}', [AdminController::class, 'destroyService'])->name('admin.services.destroy');

    // Projects routes
    Route::get('services/{service}/projects', [AdminController::class, 'indexProjects'])->name('admin.projects.index');
    Route::get('services/{service}/projects/create', [AdminController::class, 'createProject'])->name('admin.projects.create');
    Route::post('services/{service}/projects', [AdminController::class, 'storeProject'])->name('admin.projects.store');
    Route::get('services/{service}/projects/{project}/edit', [AdminController::class, 'editProject'])->name('admin.projects.edit');
    Route::put('services/{service}/projects/{project}', [AdminController::class, 'updateProject'])->name('admin.projects.update');
    Route::delete('services/{service}/projects/{project}', [AdminController::class, 'destroyProject'])->name('admin.projects.destroy');

    // Repeat similar routes for Team, Projects, AboutUs, and SiteInfo
});


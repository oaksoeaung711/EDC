<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::redirect('/admin', '/login');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/admin/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/admin/activities',ActivityController::class,['as' => 'admin']);

    Route::resource('/admin/about',AboutController::class,['as' => 'admin']);
    Route::get('admin/about/{about}/photoEdit',[AboutController::class,'photoEdit'])->name('admin.about.photoEdit');
    Route::put('admin/about/{about}/photoUpdate',[AboutController::class,'photoUpdate'])->name('admin.about.photoUpdate');

    Route::resource('/admin/contact',ContactController::class,['as' => 'admin']);

    Route::resource('/admin/home',HomeController::class,['as' => 'admin']);
    Route::get('admin/home/{home}/photoEdit',[HomeController::class,'photoEdit'])->name('admin.home.photoEdit');
    Route::get('admin/home/{home}/prpgramEdit',[HomeController::class,'programEdit'])->name('admin.home.programEdit');
    Route::put('admin/home/{home}/photoUpdate',[HomeController::class,'photoUpdate'])->name('admin.home.photoUpdate');
    Route::put('admin/home/{home}/programUpdate',[HomeController::class,'programUpdate'])->name('admin.home.programUpdate');

    Route::resource('/admin/programs',ProgramController::class,['as' => 'admin']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/programs',[PageController::class,'program'])->name('program');
Route::get('/activities',[PageController::class,'activity'])->name('activity');

require __DIR__.'/auth.php';

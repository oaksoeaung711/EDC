<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/program',[PageController::class,'program'])->name('program');
Route::get('/activities',[PageController::class,'activities'])->name('activities');
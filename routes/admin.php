<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
Use App\Http\Controllers\Admin\CategoryController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');


?>
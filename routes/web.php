<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home']);

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
route::get('view_notice',[AdminController::class,'view_notice'])->middleware(['auth','admin']);
route::post('add_notice',[AdminController::class,'add_notice'])->middleware(['auth','admin']);
route::get('delete_notice/{id}',[AdminController::class,'delete_notice'])->middleware(['auth','admin']);
route::get('edit_notice/{id}',[AdminController::class,'edit_notice'])->middleware(['auth','admin']);
route::post('update_notice/{id}',[AdminController::class,'update_notice'])->middleware(['auth','admin']);
route::get('show_notice/{id}',[AdminController::class,'show_notice'])->middleware(['auth','admin']);




route::get('/all_notices',[HomeController::class,'all_notices']);
route::get('/view_notice/{id}',[HomeController::class,'view_notice']);


route::get('/view_slider',[AdminController::class,'view_slider'])->middleware(['auth','admin']);
route::post('/add_slider',[AdminController::class,'add_slider'])->middleware(['auth','admin']);
route::get('delete_slider/{id}',[AdminController::class,'delete_slider'])->middleware(['auth','admin']);;


//Faculties
route::get('/faculties',[AdminController::class,'faculties'])->middleware(['auth','admin']);
route::post('add_faculties',[AdminController::class,'add_faculties'])->middleware(['auth','admin']);
route::get('/view_faculties',[HomeController::class,'view_faculties']);
route::get('delete_faculty/{id}',[AdminController::class,'delete_faculty'])->middleware(['auth','admin']);




//Infrastructure
route::get('/infrastructure',[AdminController::class,'infrastructure'])->middleware(['auth','admin']);
route::post('/add_infrastructure',[AdminController::class,'add_infrastructure'])->middleware(['auth','admin']);
route::get('delete_infrastructure/{id}',[AdminController::class,'delete_infrastructure'])->middleware(['auth','admin']);

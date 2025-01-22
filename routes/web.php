<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\ProjectdashController;
use App\Http\Controllers\ProjectcreateController;
use App\Http\Controllers\ProjectlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard/projects', [ProjectdashController::class, 'project'])->middleware(['auth', 'verified'])->name('projects.admin');
Route::any('/dashboard/projects/create', [ProjectcreateController::class, 'projectcreate'])->middleware(['auth', 'verified'])->name('projects.create');

Route::get('/projects/{filt?}', [ProjectlistController::class, 'projects'])->name('projects.list');

Route::get('/aboutme', [MainpageController::class, 'Mainpage']);

Route::any('/dashboard/aboutme' , [AboutmeController::class, 'aboutmeadmin'])->middleware(['auth', 'verified'])->name('aboutme.admin');

Route::get('/dashboard/contact' , [ContactController::class, 'contactadmin'])->middleware(['auth', 'verified'])->name('contact.admin');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact.create');

Route::post("/contact", [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

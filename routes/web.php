<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;
use App\Http\Middleware\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PagesController::class, 'home'])->name('home');
Route::get('/events', [PagesController::class, 'events'])->name('events');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact_form',[ContactController::class, 'contact_form']);

Route::get('aboutus',[AboutusController::class, 'aboutus'])->name('aboutus');

Route::get('event', [EventController::class, 'event'])->middleware('auth', 'Admin');
Route::post('eventform', [EventController::class, 'eventform'])->middleware('auth', 'Admin');

Route::get('edit/{id}',[EditController::class, 'edit'])->name('edit')->middleware('auth', 'Admin');

Route::post('edit/{id}',[EditController::class, 'update'])->name('update')->middleware('auth', 'Admin');

Route::delete('delete/{id}',[DeleteController::class, 'delete'])->name('delete')->middleware('auth', 'Admin');

require __DIR__.'/auth.php';

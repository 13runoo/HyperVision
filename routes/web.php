<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;
use App\http\Controllers\PagesController;

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

Route::post("/login",[UserController::class,'login'])->name('login');
Route::get("/logout",[UserController::class,'logout'])->name('logout');


Route::get("/Users",[UserController::class,'index'])->name('user.index');
Route::get("/Home",[UserController::class,'Home'])->name('Home');
Route::get("/user/create", [UserController::class,'create'])->name('User.create');
Route::get("/board", [PagesController::class,'index'])->name('board');
Route::get("/login", [PagesController::class,'showlogin'])->name('showlogin');
Route::get("/edit", [PagesController::class,'edit'])->name('edit');
Route::get("/register", [PagesController::class,'register'])->name('register');
Route::get("/list", [PagesController::class,'list'])->name('list');
Route::get('/user/delete/{id}' ,[UserController::class, 'destroy'])->name('user.delete');
Route::post('/register', [UserController::class,'store'])->name('user.store');
Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
Route::get("/user/edi/{id}t", [PagesController::class,'edit'])->name('user.edit');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [AuthController::class, 'view_register'])->name('getRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'view_login'])->name('getLogin');
Route::post('/login', [AuthController::class, 'login'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/users', [UserController::class, 'list'])->name('listUser');
Route::post('/create-user', [UserController::class, 'create'])->name('createUser');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('editUser');
Route::delete('/delete-user/{user:id}', [UserController::class, 'delete'])->name('destroyUser');
Route::patch('/edit-user/{user:id}', [UserController::class, 'update'])->name('updateUser');

Route::get('/products', [ProductController::class, 'list'])->name('listProduct');
Route::post('/create-product', [ProductController::class, 'create'])->name('createProduct');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::delete('/delete-product/{product:id}', [ProductController::class, 'delete'])->name('destroyProduct');
Route::patch('/edit-product/{product:id}', [ProductController::class, 'update'])->name('updateProduct');


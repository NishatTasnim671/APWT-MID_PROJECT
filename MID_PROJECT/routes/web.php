<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\UserController;
use App\http\controllers\StaffUpdateController;
use App\http\controllers\LoginValidation;
use App\http\controllers\CategoryController;
use App\http\controllers\ProductController;
use App\http\controllers\OrderController;


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

Route::get('/',[UserController::class,'Home'])->name('Home');

Route::get('/Registration/Handle',[UserController::class,'RegistrationHandle'])->name('RegistrationHandle');

Route::get('/Staff/Registration',[UserController::class,'Registration'])->name('Registration');

Route::post('/Registrationubmit',[UserController::class,'RegistrationSubmit'])->name('RegistrationSubmit');



Route::get('/dashboard',[UserController::class,'Dashboard'])->name('Dashboard')->middleware('ValidStaff');


Route::get('/login',[LoginValidation::class,'login'])->name('login');

Route::post('/login',[LoginValidation::class,'loginsubmit'])->name('loginsubmit');

Route::get('/logout',[LoginValidation::class,'logout'])->name('logout');

Route::get('/staffDashboard',[LoginValidation::class,'staffDash'])->name('staffDash');

Route::get('/staffProfile',[LoginValidation::class,'staffProfile'])->name('staffProfile');

Route::get('/Staff/update/{id}/{username}/',[StaffUpdateController::class,'update'])->name('update');

Route::post('/Staff/update/',[StaffUpdateController::class,'UpdateSubmit'])->name('updatesubmit');
//Category route
Route::get('/Staff/categories/',[CategoryController::class,'category'])->name('category');

Route::get('/Staff/addcategories/',[CategoryController::class,'addcategory'])->name('addcategory');

Route::post('/Staff/addcategories/',[CategoryController::class,'insertcategory'])->name('insertcategory');

Route::get('/Category/edit/{id}/',[CategoryController::class,'edit'])->name('edit');

Route::post('/Category/edit/',[CategoryController::class,'editSubmit'])->name('editCat');

Route::get('/Category/delete/{id}/',[CategoryController::class,'delete']);

//Product route
Route::get('/Staff/products/',[ProductController::class,'product'])->name('product');

Route::get('/Staff/addproducts/',[ProductController::class,'addproduct'])->name('addproduct');

Route::post('/Staff/addproducts/',[ProductController::class,'insertproduct'])->name('insertproduct');

Route::get('/Product/edit/{id}/',[ProductController::class,'edit'])->name('edit');

Route::post('/Product/edit/',[ProductController::class,'editSubmit'])->name('editsubmit');

Route::get('/Product/delete/{id}/',[ProductController::class,'delete']);

//Order route
Route::get('/Staff/showorders/',[OrderController::class,'order']);


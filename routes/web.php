<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\Admin\ProductsController;
use \App\Http\Controllers\Admin\DashboardController;
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
    return view('welcome');
});
//Category routes
Route::prefix('categories')->group(function (){
    Route::get('/',[CategoriesController::class,'index']);
    Route::get('/edit/{id}',[CategoriesController::class,'getCategory']);
    Route::post('/edit/{id}',[CategoriesController::class,'updateCategory']);
    Route::get('/add',[CategoriesController::class,'addCategory']);
    Route::post('/add',[CategoriesController::class,'handleAddCategory']);
    Route::delete('/delete/{id}',[CategoriesController::class,'deleteCategory']);
});

//Admin
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class,'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});



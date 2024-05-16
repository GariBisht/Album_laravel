<?php

use Illuminate\Support\Facades\Route;
//when use class or controller in another place 
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ImageUploadController;


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

Route::get('/',[ImageUploadController::class,'upload_image'])->name('upload.image');
Route::post('/store-image',[ImageUploadController::class,'store_image'])->name('store.image');


//Route::get('/' , [DetailController::class, 'index']);
Route::get('/detail' , [DetailController::class, 'detailPost']);  // detailPost is the method or function we create in controller



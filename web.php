<?php

use Illuminate\Support\Facades\Route;
//when use class or controller in another place 
use App\Http\Controllers\DetailController;






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

// Route::get('/', function () {
//     return view('welcome');
// });

// // we have get post , any methods for routes
// Route::get('/detail' , function () {    //route path which is shown in url

//     return view('detail');    //refers to a file inside views directory
// });

// Route through Controller 

Route::get('/' , [DetailController::class, 'index']);
Route::get('/detail' , [DetailController::class, 'detailPost']);  // detailPost is the method or function we create in controller 
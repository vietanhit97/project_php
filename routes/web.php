<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//lấy bên namespace HomeController
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

Route::get('',[HomeController::class,'home']); // khai báo router 
Route::get('gioi-thieu',[HomeController::class,'about']); // gioi thieu là người dùng nhập trên URL
Route::get('lien-he',[HomeController::class,'adress']); // gioi thieu là người dùng nhập trên URL

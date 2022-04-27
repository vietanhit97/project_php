<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;//lấy bên namespace HomeController
use App\Http\Controllers\UserController;//lấy bên namespace HomeController
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
 // khai báo router 
Route::group(['prefix'=>'admin'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[AdminController::class,'dashboard'])->name('admin');
    Route::resources([  // cmd : php artisan route:list 
        'category'=> CategoryController::class,
        'product'=> ProductController::class
    ]);
    Route::group(['prefix'=>'category'], function(){
        Route::get('trashed',[CategoryController::class,'trashed'])->name('category.trashed');
        Route::get('restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
        Route::delete('force-delete/{category}',[CategoryController::class,'restore'])->name('category.forceDelete');
    });
    Route::group(['prefix'=>'product'], function(){
        Route::get('trashed',[CategoryController::class,'trashed'])->name('product.trashed');
        Route::get('restore/{product}',[CategoryController::class,'restore'])->name('product.restore');
        Route::delete('force-delete/{product}',[CategoryController::class,'restore'])->name('product.forceDelete');
    });
});
Route::group(['prefix'=>'user'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[UserController::class,'home'])->name('user');
});
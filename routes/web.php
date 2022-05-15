<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;//lấy bên namespace HomeController
use App\Http\Controllers\UserController;//lấy bên namespace HomeController
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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
 Route::get('admin/login',[AdminController::class,'login'])->name('admin.login'); // hiển thị
 Route::post('admin/login',[AdminController::class,'check_login']); // gửi dữ liệu form check
 Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout'); // thoát
 
 Route::get('registration',[UserController::class,'registration'])->name('user.registration'); // hiển thị
 Route::post('registration',[UserController::class,'createRegistration']);
 Route::get('login',[UserController::class,'login'])->name('user.login'); // hiển thị
 Route::post('login',[UserController::class,'check_login']);
 Route::get('logout',[UserController::class,'logout'])->name('user.logout'); // thoát




 Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){ //group truyền 2 tham sô : mảng và function ,'middleware' => 'auth' đăng nhâoj
    Route::get('',[AdminController::class,'dashboard'])->name('admin');
    Route::resources([  // cmd : php artisan route:list 
        'category'=> CategoryController::class,
        'product'=> ProductController::class,
    ]);
    Route::group(['prefix'=>'category'], function(){
        Route::get('delete/trashed',[CategoryController::class,'trashed'])->name('category.trashed');
        Route::get('restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
        Route::delete('force-delete/{category}',[CategoryController::class,'forceDelete'])->name('category.forceDelete');
    });
    Route::group(['prefix'=>'product'], function(){
        Route::get('delete/trashed',[ProductController::class,'trashed'])->name('product.trashed');
        Route::get('show-product/{product}',[ProductController::class,'show'])->name('product.show');
        Route::get('restore/{product}',[ProductController::class,'restore'])->name('product.restore');
        Route::delete('force-delete/{product}',[ProductController::class,'restore'])->name('product.forceDelete');
    });
});
Route::group(['prefix'=>'user'], function(){ //group truyền 2 tham sô : mảng và function
    Route::get('',[UserController::class,'home'])->name('user');
    Route::get('shop',[UserController::class,'shop'])->name('user.shop');
    Route::get('/{category}-{slug}',[UserController::class,'category'])->name('user.category');
    Route::get('san-pham/{product}-{slug}',[UserController::class,'productSingle'])->name('user.productSingle');
});

Route::group(['prefix' => 'cart'], function() {
    Route::get('/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/view', [CartController::class, 'view'])->name('cart.view');

}); 
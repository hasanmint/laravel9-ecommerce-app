<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ChildcategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PickuppointController;
use App\Http\Controllers\Admin\Setting\SeoController;
use App\Http\Controllers\Admin\Setting\SmtpController;
use App\Http\Controllers\Admin\Setting\SettingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth','role:admin'])->group(function (){
    Route::get('admin/dashboard', [HomeController::class, 'dashboard'])->name('admin');

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/admin/edit/profile', 'EditProfile')->name('admin.edit.profile');
        Route::post('/admin/update/profile', 'UpdateProfile')->name('admin.update.profile');


        Route::get('/admin/change/password', 'ChangePassword')->name('admin.change.password');
        Route::post('/admin/update/password', 'UpdatePassword')->name('admin.update.password');
    });


    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/all/user', 'Index')->name('all.user');
        Route::get('/admin/add/user', 'AddUser')->name('add.user');
        Route::get('/admin/edit/user/{id}', 'EditUser')->name('edit.user');
        Route::post('/admin/store/user', 'StoreUser')->name('store.user');
        Route::post('/admin/update/user/{id}', 'UpdateUser')->name('update.user');
        Route::get('/admin/delete/user/{id}', 'DeleteUser')->name('delete.user');
    });


    /*===========|Category Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/category/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    /*===========|Warehouse Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse.index');
        Route::get('/warehouse/create', [WarehouseController::class, 'create'])->name('warehouse.create');
        Route::post('/warehouse/store', [WarehouseController::class, 'store'])->name('warehouse.store');
        Route::get('/warehouse/edit/{warehouse}', [WarehouseController::class, 'edit'])->name('warehouse.edit');
        Route::post('/warehouse/update/{warehouse}', [WarehouseController::class, 'update'])->name('warehouse.update');
        Route::get('/warehouse/destroy/{warehouse}', [WarehouseController::class, 'destroy'])->name('warehouse.destroy');
    });


       /*===========|Product Routes|==========*/

       Route::middleware('auth')->group(function () {
        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{warehouse}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update/{warehouse}', [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/destroy/{warehouse}', [ProductController::class, 'destroy'])->name('product.destroy');
    });



      /*===========|Subcategory Routes|==========*/

      Route::middleware('auth')->group(function () {
        Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/subcategory/edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('/subcategory/update/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategory.update');
        Route::get('/subcategory/destroy/{subcategory}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');
    });


    /*===========|Subcategory Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('/subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
        Route::post('/subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
        Route::get('/subcategory/edit/{subcategory}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
        Route::post('/subcategory/update/{subcategory}', [SubcategoryController::class, 'update'])->name('subcategory.update');
        Route::get('/subcategory/destroy/{subcategory}', [SubcategoryController::class, 'destroy'])->name('subcategory.destroy');
    });

    /*===========|Child category Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/childcategory', [ChildcategoryController::class, 'index'])->name('childcategory.index');
        Route::get('/childcategory/create', [ChildcategoryController::class, 'create'])->name('childcategory.create');
        Route::post('/childcategory/store', [ChildcategoryController::class, 'store'])->name('childcategory.store');
        Route::get('/childcategory/edit/{childcategory}', [ChildcategoryController::class, 'edit'])->name('childcategory.edit');
        Route::post('/childcategory/update/{childcategory}', [ChildcategoryController::class, 'update'])->name('childcategory.update');
        Route::get('/childcategory/destroy/{childcategory}', [ChildcategoryController::class, 'destroy'])->name('childcategory.destroy');
    });


    /*===========|Brands  Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('/brand/edit/{brand}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/brand/update/{brand}', [BrandController::class, 'update'])->name('brand.update');
        Route::get('/brand/destroy/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
    });


    /*===========|Coupon  Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/coupon', [CouponController::class, 'index'])->name('coupon.index');
        Route::get('/coupon/create', [CouponController::class, 'create'])->name('coupon.create');
        Route::post('/coupon/store', [CouponController::class, 'store'])->name('coupon.store');
        Route::get('/coupon/edit/{coupon}', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::post('/coupon/update/{coupon}', [CouponController::class, 'update'])->name('coupon.update');
        Route::get('/coupon/destroy/{coupon}', [CouponController::class, 'destroy'])->name('coupon.destroy');
    });


    /*===========|Pickuppoint  Routes|==========*/

    Route::middleware('auth')->group(function () {
        Route::get('/pickuppoint', [PickuppointController::class, 'index'])->name('pickuppoint.index');
        Route::get('/pickuppoint/create', [PickuppointController::class, 'create'])->name('pickuppoint.create');
        Route::post('/pickuppoint/store', [PickuppointController::class, 'store'])->name('pickuppoint.store');
        Route::get('/pickuppoint/edit/{pickuppoint}', [PickuppointController::class, 'edit'])->name('pickuppoint.edit');
        Route::post('/pickuppoint/update/{pickuppoint}', [PickuppointController::class, 'update'])->name('pickuppoint.update');
        Route::get('/pickuppoint/destroy/{pickuppoint}', [PickuppointController::class, 'destroy'])->name('pickuppoint.destroy');
    });




     /*===========|Web Setting Routes|==========*/

     /*--------------|SEO Routes|-------------*/
     Route::middleware('auth')->group(function () {
        Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
        Route::get('/seo/edit/{seo}', [SeoController::class, 'edit'])->name('seo.edit');
        Route::post('/seo/update/{seo}', [SeoController::class, 'update'])->name('seo.update');
    });

     /*--------------|SEO Routes|-------------*/
     Route::middleware('auth')->group(function () {
        Route::get('/smtp', [SmtpController::class, 'index'])->name('smtp.index');
        Route::get('/smtp/edit/{smtp}', [SmtpController::class, 'edit'])->name('smtp.edit');
        Route::post('/smtp/update/{smtp}', [SmtpController::class, 'update'])->name('smtp.update');
    });

     /*--------------|Setting Routes|-------------*/
     Route::middleware('auth')->group(function () {
        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/setting/edit/{setting}', [SettingController::class, 'edit'])->name('setting.edit');
        Route::post('/setting/update/{setting}', [SettingController::class, 'update'])->name('setting.update');
    });




});









require __DIR__.'/auth.php';

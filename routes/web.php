<?php

use App\Http\Controllers\Admin\Master\AttributeController;
use App\Http\Controllers\Admin\Master\CategoryController;
use App\Http\Controllers\Admin\Master\CollectionController;
use App\Http\Controllers\Admin\Master\ColourController;
use App\Http\Controllers\Admin\Master\EmblishmentController;
use App\Http\Controllers\Admin\Master\FabricController;
use App\Http\Controllers\Admin\Master\OccasionController;
use App\Http\Controllers\Admin\Master\PatternController;
use App\Http\Controllers\Admin\Master\SubCategoryController;
use App\Http\Controllers\Admin\Master\TagsController;
use App\Http\Controllers\Admin\Master\CMSController;
use App\Http\Controllers\Admin\Master\PincodeController;
use App\Http\Controllers\Admin\Master\SEOController;
use App\Mail\OnBoarding;
use App\Http\Controllers\Admin\Master\TechniqueController;
use App\Http\Controllers\Admin\Master\TeritaryCategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\CustomerGeneralController;
use Illuminate\Support\Facades\Route;


Route::get('/sri_home', function () {
    return view('/sri_home');
});

Route::get('/sri_prod', function () {
    return view('/sri_prod');
});
Route::get('/sri_catlist', function () {
    return view('/sri_catlist');
});

Route::get('/sri_search', function () {
    return view('/sri_search');
});
Route::get('/sri_cart', function () {
    return view('/sri_cart');
});




Route::get('/pages/{name}', [CustomerGeneralController::class,'generalpages'])->whereIn('name', ['refund_policy','return_policy','about_us','shipping_policy','terms&condition']);

Auth::routes(['register' => false]);
Route::middleware('emptyuser')->group(function () {
    Route::get('/a', [CustomerGeneralController::class,'welcome']);
    Route::get('/search', [CustomerGeneralController::class,'search']);
    Route::post('/searchdata', [CustomerGeneralController::class,'getsearchdata']);
    Route::get('/category/{name}', [CustomerGeneralController::class,'categorysearch']);
    Route::post('/category/{name}', [CustomerGeneralController::class,'getcatdata']);
     Route::get('/searchdata', [CustomerGeneralController::class,'getsearchdata']);
    Route::get('/collection/{namex}', [CustomerGeneralController::class,'collectionsearch']);
    Route::post('/collection/{namex}', [CustomerGeneralController::class,'getcolldata']);
    Route::get('/occasion/{name}', [CustomerGeneralController::class,'occasionsearch']);
    Route::post('/occasion/{name}', [CustomerGeneralController::class,'getoccdata']);
    Route::get('/searchdata', [CustomerGeneralController::class,'getsearchdata']);

    Route::prefix('products')->controller(CustomerGeneralController::class)->group(function () {
        Route::get('/{name}', 'productview');
    });

    Route::post('/cart/save', [CustomerGeneralController::class,'cartmanage']);
    Route::post('/wishlist/save', [CustomerGeneralController::class,'wishlistmanage']);
});

Route::prefix('cart')->controller(CustomerGeneralController::class)->group(function () {
    Route::get('/', 'cart');
    Route::get('/save', 'cartmanage');
});

Route::prefix('admin')->group(function () {
    Route::prefix('master')->group(function () {
        Route::get('/', function () {
            return view('Admin.Master.list');
        });
        Route::prefix('category')->controller(CategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('subcategory')->controller(SubCategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('teritarycategory')->controller(TeritaryCategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('collection')->controller(CollectionController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('occasion')->controller(OccasionController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('tags')->controller(TagsController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('attribute')->controller(AttributeController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('fabric')->controller(FabricController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('colour')->controller(ColourController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('emblishment')->controller(EmblishmentController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('pattern')->controller(PatternController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('technique')->controller(TechniqueController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('CMS')->controller(CMSController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('pincode')->controller(PincodeController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
        Route::prefix('SEO')->controller(SEOController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/view/{id}', 'show');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'destroy');
        });
    });
    Route::prefix('products')->controller(ProductsController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/add', 'create');
        Route::post('/add', 'store');
        Route::get('/view/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::post('/edit/{id}', 'update');
        Route::get('/delete/{id}', 'destroy');
        Route::get('/delete/{id}/imagedel/{pid}', 'destroyimage');
    });
});

Route::get('/mail',function(){
    $data=[];
    $data['name']='hi';
    return (new OnBoarding($data))->render();
});


Route::get('/collection', [CustomerGeneralController::class,'collection']);
Route::get('/category', [CustomerGeneralController::class,'category']);
 Route::get('/occasion',[CustomerGeneralController::class,'occasion']);

 Route::get('/setting/{id}',[CustomerGeneralController::class,'settingview']);


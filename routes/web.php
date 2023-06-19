<?php

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

//Route Halaman Home
Route::get('/', [App\Http\Controllers\HomesController::class, 'index']);
Route::resource('home', 'App\Http\Controllers\HomesController');


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\BlogsController');
Route::get('/food&drink', [App\Http\Controllers\BlogsController::class, 'food']);
Route::get('/art', [App\Http\Controllers\BlogsController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\BlogsController::class, 'bazar']);
Route::get('/beauty&health', [App\Http\Controllers\BlogsController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\BlogsController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\BlogsController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\BlogsController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\BlogsController::class, 'webinar']);
Route::resource('blogUMKM', 'App\Http\Controllers\BlogUMKMsController');
Route::resource('blogAdmin', 'App\Http\Controllers\BlogAdminsController');
Route::get('/blogUMKM', [App\Http\Controllers\BlogUMKMsController::class, 'index'])->name('blogUMKM');

<<<<<<< HEAD
//Route Blog Detail
Route::get('/blog-details/{id}', [App\Http\Controllers\BlogUMKMsController::class, 'show']);
Route::get('/blog-details-admin/{id}', [App\Http\Controllers\BlogAdminsController::class, 'show']);
Route::get('/food/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/art/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/Clothes/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/furniture/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/electronic/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/beauty/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/bazar/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/webinar/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);

=======
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
//Route Halaman Store
Route::get('/stores', [App\Http\Controllers\StoresController::class, 'index'])->name('stores');
Route::get('/art-store', [App\Http\Controllers\StoresController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\StoresController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\StoresController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\StoresController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\StoresController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\StoresController::class, 'other']);

// Route Store Admin
Route::delete('storeAdmin/{storeAdmin}', [App\Http\Controllers\StoreAdminsController::class, 'destroy'])->name('storeAdmin.destroy');
Route::get('/storeAdmin', [App\Http\Controllers\StoreAdminsController::class, 'index'])->name('storeAdmin');
Route::get('/dashboardAdmin', [App\Http\Controllers\AdminsController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin/food&drink', [App\Http\Controllers\StoreAdminsController::class, 'food']);
Route::get('/storeAdmin/art', [App\Http\Controllers\StoreAdminsController::class, 'art']);
Route::get('/storeAdmin/beauty&health', [App\Http\Controllers\StoreAdminsController::class, 'beauty']);
Route::get('/storeAdmin/clothes', [App\Http\Controllers\StoreAdminsController::class, 'clothes']);
Route::get('/storeAdmin/electronic', [App\Http\Controllers\StoreAdminsController::class, 'electronic']);
Route::get('/storeAdmin/furniture', [App\Http\Controllers\StoreAdminsController::class, 'furniture']);
Route::get('/storeAdmin/other', [App\Http\Controllers\StoreAdminsController::class, 'other']);
Route::get('/blogAdmin', [App\Http\Controllers\BlogAdminsController::class, 'index'])->name('blogAdmin');

// Route store Detail
Route::get('/store-details/{id}', [App\Http\Controllers\StoreAdminsController::class, 'show']);
Route::get('/store-detail', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/food-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);

// Route MyStore
Route::resource('dashboard', 'App\Http\Controllers\DashboardUMKMsController');
Route::get('/myStore', [App\Http\Controllers\MyStoresController::class, 'index'])->name('myStore');
Route::get('/myStore/create', [App\Http\Controllers\MyStoresController::class, 'create']);
Route::post('/myStore/store', [App\Http\Controllers\MyStoresController::class, 'store'])->name('myStore.store');

// Route product
Route::resource('product', 'App\Http\Controllers\ProductsController');
Route::get('/product', [App\Http\Controllers\ProductsController::class, 'index'])->name('product');

//Route Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route Auth
Auth::routes();
Route::group(['middleware'=>['admin']],function(){
    Route::resource('admin', 'App\Http\Controllers\AdminsController');
    Route::get('logout', [App\Http\Controllers\AdminsController::class, 'logout']);
});

// Route register login
Route::get('admin/login', [App\Http\Controllers\AdminsController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\AdminsController::class, 'login']);
Route::get('store/register', [App\Http\Controllers\AuthsController::class, 'login']);
Route::post('store/register', [App\Http\Controllers\AuthsController::class, 'register']);

<<<<<<< HEAD
// Route Search
Route::get('/search', [App\Http\Controllers\HomesController::class, 'search'])->name('product.search');
=======
Route::get('/dashboardUMKM', [App\Http\Controllers\DashboardUMKMController::class, 'index'])->name('dashboardUMKM');
Route::get('/myStore', [App\Http\Controllers\MyStoreController::class, 'index'])->name('myStore');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/blogUMKM', [App\Http\Controllers\BlogUMKMController::class, 'index'])->name('blogUMKM');

Route::get('/myStore/create', [App\Http\Controllers\MyStoreController::class, 'create']);
Route::post('/myStore/store', [App\Http\Controllers\MyStoreController::class, 'store'])->name('myStore.store');

Route::get('/storeAdmin', [App\Http\Controllers\StoreAdminController::class, 'index'])->name('storeAdmin');
Route::get('/dashboardAdmin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin/food&drink', [App\Http\Controllers\StoreAdminController::class, 'food']);
Route::get('/storeAdmin/art', [App\Http\Controllers\StoreAdminController::class, 'art']);
Route::get('/storeAdmin/beauty&health', [App\Http\Controllers\StoreAdminController::class, 'beauty']);
Route::get('/storeAdmin/clothes', [App\Http\Controllers\StoreAdminController::class, 'clothes']);
Route::get('/storeAdmin/electronic', [App\Http\Controllers\StoreAdminController::class, 'electronic']);
Route::get('/storeAdmin/furniture', [App\Http\Controllers\StoreAdminController::class, 'furniture']);
Route::get('/storeAdmin/other', [App\Http\Controllers\StoreAdminController::class, 'other']);
Route::get('/blogAdmin', [App\Http\Controllers\BlogAdminController::class, 'index'])->name('blogAdmin');

Route::get('/food-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/send', [App\Http\Controllers\HomeController::class, 'send'])->name('send.message');

//Route Halaman Blog Detail
<<<<<<< HEAD
Route::get('/store-details/{id}', [App\Http\Controllers\StoreAdminController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/store-details/{id}', [App\Http\Controllers\StoreAdminController::class, 'show']);
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be

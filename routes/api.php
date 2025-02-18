<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\BlogAdminController;
use App\Http\Controllers\Api\BlogUMKMController;
use App\Http\Controllers\Api\MyStoreController;
use App\Http\Controllers\Api\UMKMController;
use App\Http\Controllers\Api\StoreAdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('product', [ProductController::class, 'index']);
Route::get('blogAdmin', [BlogAdminController::class, 'index']);

Route::get('storeAdmin/food', [StoreAdminController::class, 'index']);
Route::get('storeAdmin/art', [StoreAdminController::class, 'art']);
Route::get('storeAdmin/beauty', [StoreAdminController::class, 'beauty']);
Route::get('storeAdmin/clothes', [StoreAdminController::class, 'clothes']);
Route::get('storeAdmin/electronic', [StoreAdminController::class, 'electronic']);
Route::get('storeAdmin/furniture', [StoreAdminController::class, 'furniture']);
Route::get('storeAdmin/other', [StoreAdminController::class, 'other']);
Route::get('storeAdmin/details/{id}', [StoreAdminController::class, 'show']);


Route::get('blog-details/{id}', [BlogAdminController::class, 'show']);

Route::delete('blogAdmin/delete/{id}', [BlogAdminController::class, 'destroy']);
Route::delete('blogUMKM/delete/{id}', [BlogUMKMController::class, 'destroy']);
Route::delete('productUMKM/delete/{id}', [ProductController::class, 'destroy']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('blogAdmin/create', [BlogAdminController::class, 'store']);

    Route::get('blogUMKM', [BlogUMKMController::class, 'index']);
    Route::post('blogUMKM/create', [BlogUMKMController::class, 'store']);

    Route::get('productUMKM', [ProductController::class, 'index']);
    Route::post('productUMKM/create', [ProductController::class, 'store']);

    Route::get('mystore', [MyStoreController::class, 'index']);
    Route::post('mystore/create', [MyStoreController::class, 'store']);
    Route::post('mystore/edit/{id}', [MyStoreController::class, 'update']);
});

<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::apiResource('dashboards', DashboardUMKMController::class);
=======
Route::apiResource('dashboards', DashboardUMKMController::class);
>>>>>>> ca60b13a77d2250c8df34dac0d607288e2eec176
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be

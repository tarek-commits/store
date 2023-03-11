<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UdmController;
use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\RackController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CarrierController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\OrderBinsController;
use App\Http\Controllers\Api\WarehouseController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\StorageTypeController;
use App\Http\Controllers\Api\MaterialTypesController;
use App\Http\Controllers\Api\PackingMaterialController;
use App\Http\Controllers\Api\Customers\LogisticCompanyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('warehouses',WarehouseController::class);

Route::apiResource('categories',CategoriesController::class);

Route::apiResource('areas',AreaController::class);

Route::apiResource('racks',RackController::class);

Route::apiResource('storage_types',StorageTypeController::class);

Route::apiResource('locations',LocationController::class);

Route::apiResource('udms',UdmController::class);

Route::apiResource('order_bins',OrderBinsController::class);

Route::apiResource('material_types',MaterialTypesController::class);

Route::apiResource('packing_material',PackingMaterialController::class);


Route::apiResource('logistic_company',LogisticCompanyController::class);

Route::apiResource('carrier',CarrierController::class);


    Route::apiResource('roles', RoleController::class);
    Route::apiResource('users', UserController::class);






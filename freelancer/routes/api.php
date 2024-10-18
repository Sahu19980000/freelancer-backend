<?php

use App\Http\Controllers\API\ExploreProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ApiCompanyTechnologyController;
use Illuminate\Support\Facades\Artisan;


Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');

    dd("Cache Clear All");
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [RegisterController::class, 'logout']);
    Route::get('/send-verify-email/{email}', [RegisterController::class, 'sendVerfyEmail']);
    Route::get('/emailveryfication', [RegisterController::class, 'EmailVerfication']);
    Route::post('userprofile_update/{id}', [UserController::class, 'update']);
    
    // explore project
    Route::get('explore/project', [ExploreProject::class,'index']);
    Route::get('explore/project/types/{id?}', [ExploreProject::class,'Projecttype']);
    Route::get('explore/project/types/checklist/{id?}', [ExploreProject::class,'ProjectTypeChecklist']);
    Route::get('explore/project/types/checklist/tech/{planmakeid}/{planname}', [ExploreProject::class,'ProjectTypeChecklistTechnology']);

    // technology base details show
    Route::get('explore/project/technology/details/{techid?}', [ExploreProject::class,'TechnologyDetails']);

    // filter
    Route::get('explore/project/technology/filter', [ApiCompanyTechnologyController::class,'filter']);
});





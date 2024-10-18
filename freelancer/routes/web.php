<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\ClientUserController;
use App\Http\Controllers\admin\CompanyUserController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\CompanyTechnologyController;
use App\Http\Controllers\DropdownController;

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\LanguageController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\admin\PlanMakeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/verify-mail/{token}', [UserController::class, 'verificationMail']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Route::get('dropdown', [DropdownController::class, 'index']);
// Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
// Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);


Route::get('dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-subcategories', [DropdownController::class, 'fetchSubcategories']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);


    //Client_User
    Route::resource('clientusers', ClientUserController::class);

    //Company_User
    Route::resource('companyusers', CompanyUserController::class);
    Route::post('companyusers.update', [CompanyUserController::class,'update'])->name('companyusers.update');



    //Company
    Route::resource('company', CompanyController::class);

    //Project
    Route::resource('projects', ProjectController::class);

    //category
    Route::resource('category', CategoryController::class);

    //subcategory
    Route::resource('subcategory', SubCategoryController::class);

    // plan make
    Route::resource('basicplanmake', PlanMakeController::class);

    Route::post('getsubcategory/{categoryid?}', [PlanMakeController::class,'GetSubcategory'])->name('getsubcategory');
    Route::post('basicplanmakeitem/delete', [PlanMakeController::class,'BasicPlanItemDelete'])->name('basicplanmakeitem/delete');

    Route::get('advanceplanmake/index', [PlanMakeController::class,'AdvanceIndex'])->name('advanceplanmake/index');
    Route::get('advanceplanmake/create', [PlanMakeController::class,'AdvanceCreate'])->name('advanceplanmake/create');
    Route::post('advanceplanmake/store', [PlanMakeController::class,'AdvanceStore'])->name('advanceplanmake/store');
    Route::get('advanceplanmake/edit/{id?}', [PlanMakeController::class,'AdvanceEdit'])->name('advanceplanmake/edit');
    Route::post('advanceplanmake/update', [PlanMakeController::class,'AdvanceUpdate'])->name('advanceplanmake/update');
    Route::post('advanceplanmake/destroy/{id?}', [PlanMakeController::class,'Advancedelete'])->name('advanceplanmake/destroy');
    Route::post('advanceplanmakeitem/delete', [PlanMakeController::class,'AdvanceItemDelete'])->name('advanceplanmakeitem/delete');

    Route::get('premiumplanmake/index', [PlanMakeController::class,'PremiumIndex'])->name('premiumplanmake/index');
    Route::get('premiumplanmake/create', [PlanMakeController::class,'PremiumCreate'])->name('premiumplanmake/create');
    Route::post('premiumplanmake/store', [PlanMakeController::class,'PremiumStore'])->name('premiumplanmake/store');
    Route::get('premiumplanmake/edit/{id?}', [PlanMakeController::class,'PremiumEdit'])->name('premiumplanmake/edit');
    Route::post('premiumplanmake/update', [PlanMakeController::class,'PremiumUpdate'])->name('premiumplanmake/update');
    Route::post('premiumplanmake/destroy/{id?}', [PlanMakeController::class,'Premiumdelete'])->name('premiumplanmake/destroy');
    Route::post('premiumplanmakeitem/delete', [PlanMakeController::class,'PremiumItemDelete'])->name('premiumplanmakeitem/delete');

    Route::get('language/info/index', [LanguageController::class,'index'])->name('language/info/index');
    Route::get('language/info/create', [LanguageController::class,'create'])->name('language/info/create');
    Route::post('language/info/store', [LanguageController::class,'store'])->name('language/info/store');
    Route::get('language/info/show/{id?}', [LanguageController::class,'show'])->name('language/info/show');
    Route::get('language/info/edit/{id?}', [LanguageController::class,'edit'])->name('language/info/edit');
    Route::get('language/info/update', [LanguageController::class,'update'])->name('language/info/update');
    Route::get('language/info/delete', [LanguageController::class,'destroy'])->name('language/info/delete');
    Route::post('language/info/plan', [LanguageController::class,'GetSubcategoryPlan'])->name('language/info/plan');
    Route::post('language/info/plans', [LanguageController::class,'GetSubcategoryPlans'])->name('language/info/plans');

    // company add techonolgy any persion
    Route::get('company/technology/index', [CompanyTechnologyController::class,'index'])->name('company/technology/index');
    Route::get('company/technology/create', [CompanyTechnologyController::class,'create'])->name('company/technology/create');
    Route::post('company/technology/store', [CompanyTechnologyController::class,'store'])->name('company/technology/store');
    Route::get('company/technology/edit/{id?}', [CompanyTechnologyController::class,'edit'])->name('company/technology/edit');
    Route::post('company/technology/update', [CompanyTechnologyController::class,'update'])->name('company/technology/update');
    Route::delete('company/technology/delete/{id?}', [CompanyTechnologyController::class,'destroy'])->name('company/technology/delete');

    

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// email veryfication
   Route::get('/emailveryfication/{email}', [RegisterController::class, 'EmailVerfication']);

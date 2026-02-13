<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use PhpParser\Node\Stmt\Function_;
use App\Http\Controllers\produitController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\categorieController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;
use App\Models\role;
use Symfony\Component\HttpKernel\HttpCache\Store;

    Route::resource('Produits',produitController::class)->middleware(UserMiddleware::class);
    Route::post('/Produits/search', [ProduitController::class, 'search'])->name('Produits.search')->middleware(UserMiddleware::class);
    Route::get('/Login/create',[LoginController::class,'loginCreate'])->name('LoginCreate');
    Route::post('/Login',[LoginController::class,'create']);
    Route::post('/inscription',[UserController::class,'store'])->middleware(UserMiddleware::class);
    Route::get('/inscription/create',[UserController::class,'create'])->middleware(UserMiddleware::class);
    Route::post('/Logout',[LogoutController::class,'create'])->name('Logout');
    Route::post('/Favoris/{id}',[FavorisController::class,'store'])->name('Favoris');
    Route::post('/Produits/filter',[produitController::class,'filter']);


    //********//
    Route::resource('/role',RoleController::class);
    Route::resource('/user',UserController::class);
    // Route::post('',)
    
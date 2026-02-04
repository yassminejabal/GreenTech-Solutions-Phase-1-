<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use PhpParser\Node\Stmt\Function_;
use App\Http\Controllers\produitController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;

    Route::resource('Produits',produitController::class)->middleware(UserMiddleware::class);
    Route::post('/Produits/search', [ProduitController::class, 'search'])->name('Produits.search');
    Route::get('/Login/create',[LoginController::class,'loginCreate'])->name('LoginCreate');
    Route::post('/Login',[LoginController::class,'authenticate']); 
    Route::post('/inscription',[UserController::class,'store']);


    Route::get('/inscription/create',[UserController::class,'create']);
    // Route::get('/inscription/create',[UserController::class,'create']);
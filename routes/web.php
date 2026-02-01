<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use PhpParser\Node\Stmt\Function_;
use App\Http\Controllers\produitController;
use App\Http\Controllers\categorieController;

    // Route::get('/ajouter',);
    // Route::get('/create',function(){
    //     return view("create");
    //     });

    //     Route::get('/', function () {
    //             // echo 'huii';
    //             return view("Dachbord");
    //         });
    // Route::get("/produit/create",[produitController::class,"create"]);
    // Route::get("/Dachbord",[categorieController::class,"create"]);
    // Route::get("/produit/store",[produitController::class,"store"]);
    // Route::get("/produit/edit",[produitController::class,"edit"]);
    // Route::get("/",function(){
    //     echo 'hello';
    // });

    Route::resource('Produits',produitController::class);
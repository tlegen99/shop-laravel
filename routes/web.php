<?php

use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get("/", [MainController::class, "index"])->name("index");
Route::get("/categories", [MainController::class, "categories"])->name("categories");

Route::get("/basket", [BasketController::class, "basket"])->name("basket");
Route::get("/basket/order", [BasketController::class, "basketOrder"])->name("basket-order");
Route::post("/basket/add/{id}", [BasketController::class, "basketAdd"])->name("basket-add");
Route::post("/basket/remove/{id}", [BasketController::class, "basketRemove"])->name("basket-remove");
Route::post("/basket/confirm", [BasketController::class, "basketConfirm"])->name("basket-confirm");

Route::get("/{category}", [MainController::class, "category"])->name("category");
Route::get("/{category}/{product?}", [MainController::class, "product"])->name("product");
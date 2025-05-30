<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "home"])->name("homepage");
Route::get('/login', [HomeController::class, "login"])->name("login");



Route::get("/admin", [AdminController::class, "dashboard"])->name("admin.dashboard");
Route::get("/admin/category", [AdminController::class, "manageCategory"])->name("admin.manageCategory");
Route::post("/admin/category", [AdminController::class, "createCategory"])->name("admin.createCategory");
Route::get("/admin/product", [ProductController::class, "index"])->name("admin.manageProduct");
Route::get("/admin/product/insert", [ProductController::class, "insert"])->name("admin.insertProduct");
Route::post("/admin/product/insert",[ProductController::class, "store"])->name("admin.storeProduct");

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Auth::routes();

Route::get('/brand', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {
    Route::get('dashboard', [DashboardController::class, 'index']);
});

// Brand Route
Route::get('/brand/create', [BrandController::class, 'create']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/{brand}/edit', [BrandController::class, 'edit']);

// Category Route
Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{category}/edit', [CategoryController::class, 'edit']);


// Unit Route
Route::get('/unit/create', [UnitController::class, 'create']);
Route::get('/unit', [UnitController::class, 'index']);
Route::get('/unit/{unit}/edit', [UnitController::class, 'edit']);

// Supplier Route
Route::get('/supplier/create', [SupplierController::class, 'create']);
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit']);


// Product Route
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);


// Invoice Route
Route::get('/invoice/create', [InvoiceController::class, 'create']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/{invoice}/edit', [InvoiceController::class, 'edit']);


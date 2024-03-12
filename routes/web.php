<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/', [TemplateController::class,'index'])->name('home.page');
Route::get('/about', [TemplateController::class,'about']);
Route::get('/rate', [TemplateController::class,'rate']);
Route::get('/checkout', [TemplateController::class,'checkout']);
Route::get('/kids', [TemplateController::class,'kids']);
Route::get('/mens', [TemplateController::class,'mens']);
Route::get('/womens', [TemplateController::class,'womens']);
Route::get('/contact', [TemplateController::class,'contact']);
Route::get('/welcome', [TemplateController::class,'welcome']);
//Route::get('/dashboard', [TemplateController::class,'dashboard']);
//Route::get('/navigation-menu', [TemplateController::class,'navigation-menu']);

//Routes for Admin page
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\InventoryController;

Route::get('/admin', [UserController::class, 'show'])->name('admin.page'); //Show main admin page
Route::post('/admin/store', [UserController::class, 'store'])->name('users.store'); //Store data
Route::delete('/admin/deleteSelected', [UserController::class, 'deleteSelected'])->name('users.deleteSelected'); //Delete data
Route::put('/admin/update', [UserController::class, 'update'])->name('users.update'); //Update data

Route::get('/process-orders', [ProcessController::class, 'index'])->name('process.orders');

Route::get('/inventory-management', [InventoryController::class, 'index'])->name('inventory.management');
Route::post('/inventory-management/store', [InventoryController::class, 'store'])->name('inventory.store'); //Store data
Route::put('/inventory-management/update', [InventoryController::class, 'update'])->name('inventory.update'); //Update data
Route::delete('/inventory-management/delete', [InventoryController::class, 'delete'])->name('inventory.delete'); //Delete data
Route::get('/inventory-management/search', [InventoryController::class, 'search'])->name('inventory.search'); //Search





<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [HomePageController::class, 'Index'])->name('homePage');


Route::get('/Login', [UsersController::class, 'loginindex'])->name('User.Login.index');

Route::post('/Login', [UsersController::class, 'login'])->name('User.Login.login');

Route::get('/Logout', [UsersController::class, 'Logout'])->name('User.logout');

Route::get('/SignUp', [UsersController::class, 'SignUpindex'])->name('User.SignUp.index');

Route::post('/SignUp', [UsersController::class, 'SignUp'])->name('User.SignUp.SignUp');

Route::get('/Users', [UsersController::class , 'showUsers'])->name('Admin.showUsers');

Route::get('/addUser', [UsersController::class , 'addUserIndex'])->name('Admin.addUser.index');

Route::post('/addUser', [UsersController::class , 'addUser'])->name('Admin.addUser.add');

Route::delete('/Users/{user}', [UsersController::class , 'delete'])->name('Admin.deleteUser');

Route::get('/Users/{user}', [UsersController::class , 'updateIndex'])->name('Admin.updateUser.index');

Route::put('/Users/{user}', [UsersController::class , 'update'])->name('Admin.updateUser.update');

Route::get('/Product/{product}',[ProductsController::class , 'getInfos'])->name('product.product');

Route::get('/Products', [ProductsController::class , 'getProducts'])->name('product.Products');

Route::get('/addProducts' , [ProductsController::class , 'AddProductsIndex'])->name('Product.addProduct.index');

Route::post('/addProducts' , [ProductsController::class , 'AddProducts'])->name('Product.addProduct.add');

Route::delete('/Products/Delete/{product}', [ProductsController::class , 'delete'])->name('Product.deleteProduct');

Route::get('/Products/updateProdcut/{product}',[ProductsController::class , 'updateIndex'])->name('Product.update.index');

Route::put('/Products/update/{product}', [ProductsController::class , 'update'])->name('Product.update.update');

Route::post('/addToCart/{product}',[CartController::class,'addToCart'])->name('cart.add');

Route::get('/Cart',[CartController::class , 'getCart'])->name('cart.index');

Route::get('/{category}', [HomePageController::class, 'IndexCategory'])->name('homePage.category');
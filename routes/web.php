<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenAuthenticMiddleware;
use App\Models\Product;
use Doctrine\Common\Lexer\Token;
use Illuminate\Support\Facades\Route;
use TheSeer\Tokenizer\Token as TokenizerToken;

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

//Brand List
Route::get('/BrandList', [BrandController::class, 'BrandList']);
//Category List
Route::get('/CategoryList', [CategoryController::class, 'CategoryList']);
//Product List
Route::get('/ListProductByCategory/{id}', [ProductController::class, 'ListProductByCategory']);
Route::get('/ListProductByBrand/{id}', [ProductController::class, 'ListProductByBrand']);
Route::get('/ListProductByRemark/{remark}', [ProductController::class, 'ListProductByRemark']);
//Slider
Route::get('/ListProductSlider', [ProductController::class, 'ListProductSlider']);
//Product Details
Route::get('/ProductDetailsById/{id}', [ProductController::class, 'ProductDetailsById']);
Route::get('/ListReviewByProduct/{product_id}', [ProductController::class, 'ListReviewByProduct']);
//Policy
Route::get('/PolicyByType/{type}', [PolicyController::class, 'PolicyByType']);

//User Auth
Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/Logout', [UserController::class, 'UserLogout']);

//User Profile

Route::post('/CreateProfile', [ProfileController::class, 'CreateProfile'])->middleware([TokenAuthenticMiddleware::class]);
Route::get('/ReadProfile', [ProfileController::class, 'ReadProfile'])->middleware([TokenAuthenticMiddleware::class]);

//Product Review
Route::post('/CreateProductReview', [ProductController::class, 'ProductReview'])->middleware([TokenAuthenticMiddleware::class]);

//Wish List
Route::get('/ProductWishList', [ProductController::class, 'ProductWishList'])->middleware([TokenAuthenticMiddleware::class]);
Route::post('/CreateWishList/{product_id}', [ProductController::class, 'CreateWishList'])->middleware([TokenAuthenticMiddleware::class]);
Route::get('/RemoveWishList/{product_id}', [ProductController::class, 'RemoveWishList'])->middleware([TokenAuthenticMiddleware::class]);

//Product Cart
Route::post('/CreateCartList', [ProductController::class, 'CreateCart'])->middleware([TokenAuthenticMiddleware::class]);
Route::get('/CartList', [ProductController::class, 'CartList'])->middleware([TokenAuthenticMiddleware::class]);
Route::get('/DeleteCartList/{product_id}', [ProductController::class, 'DeleteCartList'])->middleware([TokenAuthenticMiddleware::class]);
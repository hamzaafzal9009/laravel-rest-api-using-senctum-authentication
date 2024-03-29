<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products', [ProductController::class, 'index']);

Route::resource('products', ProductController::class);
Route::get('/products/search/{name}', [ProductController::class, 'search']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

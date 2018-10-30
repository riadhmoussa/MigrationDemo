<?php

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
use App\Product;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'productController@ViewProduct');
Route::get('/addproduct', 'productController@AddProduct');
Route::post('/addproduct', 'productController@AddProduct');
Route::get('/products/{id}', function ($id){
$product=Product::find($id);
    $product->delete();
    return redirect('products');

});
Route::get('edit/{id}', 'productController@EditProduct');
Route::post('edit/{id}', 'productController@EditProduct');
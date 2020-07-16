<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Product;
use Illuminate\Http\Request;

//Product List
Route::get('/', function(){
    $products = Product::orderBy('created_at','desc')->get();
    return view('products',[
        'products' => $products
    ]);
});


//Add new product
Route::post('/product', function(Request $request){
    //validate information
    $validator = Validator::make($request->all(),[
        'name' => "required|max:255",
        'price' => "required",
    ]);
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $product = new Product;
    $product->name = $request->name;
    $product->price = $request->price;
    $product->save();

    return redirect('/');
});

//Delete specific product
Route::delete('admin/product/{id}', function($id){
    Product::findOrFail($id)->delete();
    return redirect('/');
});

?>


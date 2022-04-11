<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\ProductModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    // listing
    public function index(Request  $request){
        $products = Product::all();

        return view('admin.product.list',[
            'products' => $products
        ]);
    }

    // create
    public function create(Request  $request){

    }

    public function update(Request  $request,$product){

    }

    public function destroy(Request  $request,$product){

    }

    public function show(Request  $request,$product){
        return $this->edit($request,$product);
    }

    public function edit(Request  $request,$product){

    }
}

<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class LinkController extends Controller
{
   public function listProduct(){

       $listProduct=ProductModel::all();
//       var_dump($listProduct);die();

       return view('product.list')->with('listProduct',$listProduct);

   }
   public function addProduct(){
       return view('product.add');
   }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteProduct($id){
       $product=ProductModel::find($id);
        $product->delete();
        return redirect()->route('listPr')->with('message','product was deleted');
    }
    public function updateProduct(Request $request, $id){

        $uproduct=ProductModel::find($id);
        if ($request->isMethod('post')){
            $data = $request->only(array('product_name','product_price','description'));
            //var_dump($data);die();
            $uproduct->update($data);
            return redirect()->route('listPr')->with('message','product was updated');
        }
        return view('product.add')->with('uproduct',$uproduct);


    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validProduct(Request $request){
    //   return view('product.list');
    //    return "zay";
     $parameters=$request->except(['_token']);
    // var_dump($parameters);die();

    // Add to database
    ProductModel::create($parameters);

    return redirect()->route('listPr')->with('message','product was added');

   }
}

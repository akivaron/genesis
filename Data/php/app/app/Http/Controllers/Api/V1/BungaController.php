<?php
namespace App\Http\Controllers\Api\V1;
// use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BungaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     // $products = Product::all();
     return response()->json('product index successfully');

    }
     public function create(Request $request)
     {
       //  $product = new Product;
       // $product->name= $request->name;
       // $product->price = $request->price;
       // $product->description= $request->description;
       //
       // $product->save();
       return response()->json('product create successfully');

     }
     public function show($id)
     {
        // $product = Product::find($id);
        return response()->json('product show successfully');

     }
     public function update(Request $request, $id)
     {
        // $product= Product::find($id);
        //
        // $product->name = $request->input('name');
        // $product->price = $request->input('price');
        // $product->description = $request->input('description');
        // $product->save();
        // return response()->json($product);
        return response()->json('product updated successfully');

     }
     public function destroy($id)
     {
        // $product = Product::find($id);
        // $product->delete();
         return response()->json('product removed successfully');
     }
  }

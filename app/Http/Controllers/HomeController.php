<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\product;
use  Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(Request $request){
        $type = Auth::user()->usertype;
        // echo 'hellooooo';die;
        if($type != 0){
            return view('admin.home');
        }
        else{
            $products=product::paginate(2);
            return view('home.userpage',['products'=>$products]);
        }
    }
    public function index(Request $request){
        $products=product::paginate(2);
        return view('home.userpage', ['products'=>$products]);

    }

    public function product_details(Request $request, $id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category);

        return view('home.products_details', ['product' => $product, 'category' => $category]);
    }
}
  

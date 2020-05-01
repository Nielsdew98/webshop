<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Review;
use Hamcrest\Core\AllOf;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //pages
    public function index(){
        $newproducts = Product::latest()->take(5)->get();
        return view('index',compact('newproducts'));
    }
    public function contact(){
        return view('front.contact');
    }

    public function cart(){

    }
    public function login(){

    }
    //shoppage
    public function shop(){
        $products = Product::All()->where('is_active',1);
        $categories = Category::select('name','id')->get();
        return view('front.shop',compact('products','categories'));
    }

    //productpage
    public function product($slug){
        $product = Product::with(['photos','stock'])->where('slug',$slug)->first();
        return view('front.product',compact('product'));
    }
}

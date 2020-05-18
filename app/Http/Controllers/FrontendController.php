<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Discount;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


class FrontendController extends Controller
{
    //pages
    public function index(){
        $newproducts = Product::latest()->take(5)->get();
        $discount = Discount::with(['product'])->where('homepage',1)->first();
        return view('index',compact('newproducts','discount'));
    }
    public function contact(){
        return view('front.contact');
    }
    //search
    public function search(Request $request){
        if ($request->zoeken == null){

        }else{
            $products = Product::where('title','like','%'.$request->zoeken.'%')->get();
            $categories = Category::select('name','id')->get();
            return view('front.search',compact('products','categories'));
        }
    }

    //cart
    public function cart(){
        if (!Session::has('cart')){
            return redirect('/shop');
        }else{
            $currentcart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentcart);
            $cart = $cart->products;
            return view('front.cart',compact('cart'));
        }
    }
    public function addToCart($id){
        $product = Product::all() -> where('id',$id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        Session::put('cart',$cart);
        return redirect('/cart');
    }
    public function updateQuantity(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        //(Session('cart'));
        Session::put('cart',$cart);

        return redirect('/cart');
    }
    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart',$cart);

        return redirect('/cart');
    }
    public function login(){

    }
    //shoppage
    public function shop(){
        $products = Product::paginate(8)->where('is_active',1);
        $categories = Category::select('name','id')->get();
        return view('front.shop',compact('products','categories'));
    }
    public function productsPerCategory($id){
        $categories = Category::all();
        $products =  Product::with('categories')->where('category_id',$id);
        return view('front.shop',compact('categories','products'));
    }
    public function productsPerPage(Request $request){
        $products = Product::paginate($request->qtyproduct)->where('is_active',1);
        $categories = Category::select('name','id')->get();
        return view('front.shop',compact('products','categories'));
    }
    public function showModal($id){
        $product = Product::find($id);
        return view('front.quickView',compact('product'));
    }

    //productpage
    public function product($slug){
        $product = Product::with(['photos','stock','reviews'=>function($q){
            $q->where('reviews.is_active', 1);
        }])->where('slug',$slug)->first();
        return view('front.product',compact('product'));
    }

    //discounts
    public function discounts(){
        $discounts = Discount::with('product')->get();
        return view('front.discounts',compact('discounts'));
    }

}

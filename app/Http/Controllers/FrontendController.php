<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Discount;
use App\Filters\ProductQueryFilter;
use App\Newsletter;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Unirest;


class FrontendController extends Controller
{
    //pages
    public function index(){
        Unirest\Request::verifyPeer(false);
        $instagram = new \InstagramScraper\Instagram();
        $nonPrivateAccountMedias = $instagram->getMedias('boardgamersdbe',4);
        $newproducts = Product::latest()->take(6)->get();
        $discount = Discount::with(['product'])->where('homepage',1)->first();
        return view('index',compact('newproducts','discount','nonPrivateAccountMedias'));
    }
    public function contact(){
        return view('front.contact');
    }
    //search
    public function search(Request $request){
        if ($request->zoeken == null){
                return back();
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
    //shoppage
    public function shop(){
        $categories = Category::select('name','id')->get();
        $products = Product::where('is_active',1)->paginate(8);
        return view('front.shop',compact('products','categories'));
    }
    public function productsPerCategory($id){
        $categories = Category::select('name','id')->get();
        $products = Product::with('categories')->whereHas('categories', function($q) use ($id){
            $q->where('category_id', '=',$id);
        })->where('is_active', '=', '1')->paginate(8);
        return view('front.shop',compact('categories','products'));
    }
    public function productsPerPage(Request $request){
        if ($request->qtyproduct == 'doorlopend'){
            $products = Product::all()->where('is_active',1);
            $categories = Category::select('name','id')->get();
            return view('front.shop',compact('products','categories'));
        }else{
            $categories = Category::select('name','id')->get();
            $products = Product::where('is_active',1)->paginate($request->qtyproduct);
            return view('front.shop',compact('products','categories'));
        }

    }
    public function sort(Request $request){
        switch ($request->sort){
            case 'az':
                $products = Product::orderBy('title','ASC')->where('is_active',1)->paginate(8);
                $categories = Category::select('name','id')->get();
                return view('front.shop',compact('products','categories'));
            case 'za':
                $products = Product::orderBy('title','DESC')->where('is_active',1)->paginate(8);
                $categories = Category::select('name','id')->get();
                return view('front.shop',compact('products','categories'));
            case 'prijsoplopend':
                $products = Product::orderBy('price','ASC')->where('is_active',1)->paginate(8);
                $categories = Category::select('name','id')->get();
                return view('front.shop',compact('products','categories'));
            case 'prijsaflopend':
                $products = Product::orderBy('price','DESC')->where('is_active',1)->paginate(8);
                $categories = Category::select('name','id')->get();
                return view('front.shop',compact('products','categories'));
        }

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

    public function checkout(){
        if (Auth::check()){
            $user = User::findOrFail(Auth::id());
            $currentcart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentcart);
            $cart = $cart->products;
            return view('front.checkout',compact('user','cart'));
        }else{
            $currentcart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentcart);
            $cart = $cart->products;
            return view('front.checkout',compact('cart'));
        }
    }
    public function accountPage(){
            $user = User::findOrFail(Auth::id());
            return view('front.account',compact('user'));
    }

    public function newsletter(Request $request){
        if ($request->email = Newsletter::where('email',$request->email)->first()){
            return redirect()->back()->with('newsletter', 'You are already subscribed for the newsletter!');
        }else{
            $input = $request->all();
            Newsletter::create($input);
            return redirect()->back()->with('newsletter', 'You are succesfully subscribed for the newsletter!');
        }

    }
}

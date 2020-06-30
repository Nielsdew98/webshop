<?php

namespace App\Http\Controllers;

use App\Award;
use App\Category;
use App\Http\Requests\ProductsRequest;
use App\Photo;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Array_;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;


class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with('default_image','reviews')->withTrashed()->paginate(8);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories= Category::select('name','id')->get();

        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        //
        $product = new Product();
        $product->title = $request->title;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->is_active = $request->is_active;
        $product->slug = $request['slug'] = Str::slug($request->title,'-');
        $stock = Stock::create(['stock'=>$request->stock]);
        $product->stock_id = $stock->id;
        $product->save();
        if ($request->main_image){
            $photo =$request->main_image;
            $name = time() . $photo->getClientOriginalName();
            $photo->move('images/products', $name);
            Photo::create(['file'=>$name,'product_id'=>$product->id,'main_image'=>1]);
        }
        if($request->images){
            foreach ($request->images as $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images/products', $name);
                Photo::create(['file'=>$name,'product_id'=>$product->id]);
            }
        }
        if($request->awards){
            foreach ($request->awards as $award) {
                Award::create(['name' => $award,'product_id'=>$product->id]);
            }
        }
        $product->categories()->sync($request->categories, false);
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $categories= Category::pluck('name','id')->all();
        return view('admin.products.edit',compact('categories','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories= Category::select('name','id')->get();
        return view('admin.products.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $input = $request->all();

        if ($request->main_image){
                if (!empty($product->default_image)){
                    unlink(public_path().$product->default_image->file);
                    $product->default_image->delete();
                }
                $photo =$request->main_image;
                $name = time() . $photo->getClientOriginalName();
                $photo->move('images/products', $name);
                Photo::create(['file'=>$name,'product_id'=>$product->id,'main_image'=>1]);
        }
        if($request->images){
            foreach ($request->images as $file){
                $name = time() . $file->getClientOriginalName();
                $file->move('images/products', $name);
                Photo::create(['file'=>$name,'product_id'=>$product->id]);
            }
        }
        $input['slug'] = Str::slug($request->title,'-');
        if (!$product->stock()->count() == 0){
            $product->stock()->update(['stock' =>$request->stock]);
        }else{
            $stock = Stock::create(['stock'=>$request->stock]);
            $product->stock_id = $stock->id;
        }
        $product->update($input);
        $product->categories()->sync($request->categories, false);
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if($product->photos !== null){
            foreach ($product->photos as $photo){
                $photo->delete();
            }
        }
        $product->categories()->detach();
        $product->stock()->delete();
        $product->delete();
        return redirect('admin/products');
    }
    public function productRestore($id){
      Product::withTrashed()->where('id',$id)->restore();

      return redirect('admin/products');
    }
    public function sortAdmin(Request $request){
        switch ($request->sorting){
            case 'all':
                $products = Product::with('default_image','reviews')->withTrashed()->paginate(8);
                return view('admin.products.index',compact('products'));
            case 'az':
                $products = Product::orderBy('title','ASC')->where('is_active',1)->withTrashed()->paginate(8);
                return view('admin.products.index',compact('products'));
            case 'za':
                $products = Product::orderBy('title','DESC')->where('is_active',1)->withTrashed()->paginate(8);
                $categories = Category::select('name','id')->get();
                return view('admin.products.index',compact('products'));
            case 'prijsoplopend':
                $products = Product::orderBy('price','ASC')->where('is_active',1)->withTrashed()->paginate(8);;
                return view('admin.products.index',compact('products'));
            case 'prijsaflopend':
                $products = Product::orderBy('price','DESC')->where('is_active',1)->withTrashed()->paginate(8);;
                return view('admin.products.index',compact('products'));
            case 'stockout':
                //$products = Product::with('stock')->where('stock',0)->paginate(8);
                $count = count(Product::whereHas('stock', function ($query) {
                    return $query->where('stock', '=', 0);
                })->get());
                if ($count > 0){
                    $products = Product::whereHas('stock', function ($query) {
                        return $query->where('stock', '=', 0);
                    })->paginate(8);
                    return view('admin.products.index',compact('products'));
                }else{
                    $products = Product::with('default_image','reviews')->withTrashed()->paginate(8);
                    return view('admin.products.index',compact('products'));
                }

        }

    }
}

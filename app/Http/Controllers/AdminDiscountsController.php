<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Product;
use Illuminate\Http\Request;

class AdminDiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $discounts = Discount::paginate(15);
        return view('admin.discounts.index',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::select('title','id')->where('is_active',1)->get();
        return view('admin.discounts.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($discount = Discount::where('homepage',1)){
            $discount->update(['homepage'=>0]);
        }
        $input = $request->all();
        if ($request->homepage){
            $input['homepage'] = "1";
        }

        Discount::create($input);
        return redirect('admin/discounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        //
        $discount = Discount::findOrFail($id);
        $products = Product::select('title','id')->get();
        return view('admin.discounts.edit',compact('products','discount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $input = $request->all();
        if($request->homepage){
            if ($discount = Discount::where('homepage',1)){
                $discount->update(['homepage'=>0]);
            }
            $input['homepage'] = 1;
        }else{
            $input['homepage'] = 0;
        }
        $discount = Discount::findOrFail($id);
        $discount->update($input);
        return redirect('admin/discounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Discount::findOrFail($id)->delete();
        return redirect()->back();
    }
}

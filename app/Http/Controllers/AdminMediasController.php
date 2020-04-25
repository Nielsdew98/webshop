<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Product;
use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->product){
            $photos = Photo::all()->where('product_id',$request->product);
            $products = Product::pluck('title','id')->all();
            return view('admin.medias.index',compact('products','photos'));
        }else{
            $products = Product::pluck('title','id')->all();
            $photos = null;
            return view('admin.medias.index',compact('products','photos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(Photo $photo)
    {
        //

        return view('admin.medias.edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
        dd($request->image);
        $photo->update($request->image);
        $products = Product::pluck('title','id')->all();
        $photos = null;
        return view('admin.medias.index',compact('products','photos'));
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
        $photo = Photo::findOrFail($id);
        unlink(public_path() . $photo->file);
        $photo->delete();
        $products = Product::pluck('title','id')->all();
        $photos = null;
        return view('admin.medias.index',compact('products','photos'));
    }
}

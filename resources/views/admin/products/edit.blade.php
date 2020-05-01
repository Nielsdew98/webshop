@extends('layouts.admin')
@section('title')
    Product editeren
@endsection
@section('content')
 {{--   <div class="col-lg-6">
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminProductsController@update',$product->id], 'enctype'=>'multipart/form-data']) !!}

        <div class="card mb-2">
            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
            <div class="p-2">
                <div class="form-group mb-3">
                    {!! Form::label('title', 'Product Name:') !!}
                    {!! Form::text('title', $product->title,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('shortdescription', 'Short description:') !!}
                    {!! Form::text('shortdescription', $product->short_description,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description', $product->description,['class'=>'form-control','rows'=>'5']) !!}
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('categories', 'Categories:') !!}
                    {!! Form::select('categories[]',$categories,$product->categories->pluck('id')->toArray(),['class'=>'form-control',
                    'multiple'=>'multiple'])
                     !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', $product->price,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , $product->is_active , ['class'=>'form-control']) !!}
                </div>
            </div>

        </div> <!-- end card-box -->
    </div> <!-- end col -->

    <div class="col-lg-6">
            <div class="card mb-2">
                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>
                <h6 class="text-uppercase ">Main Image</h6>
                <p class="bg-warning">This photo will show up on the website as the main-image, Original photo will be overwritten</p>
                <div class="row p-2">
                    <div class="col-6">
                        <img src="{{$product->default_image ? asset($product->default_image->file) : 'GEEN FOTO'}}" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-6 ">
                        {!! Form::file('main_image',['class'=>'form-control-file mb-3']) !!}
                    </div>
                </div>
                <h6 class="text-uppercase">Detail Images</h6>
                <p class="bg-warning">These photos will show up the detail page</p>
                <div class="row">
                    @foreach($product->detail_images as $photo)
                        <div class="col-3">
                            <img src="{{$photo->file ? asset($photo->file): 'GEEN FOTO'}}" class="img-fluid" alt="">
                        </div>
                    @endforeach
                </div>
                <div class="p-2">
                    {!! Form::file('images[]',['class'=>'form-control dropzone','multiple'=>'multiple']) !!}
                </div>
            </div> <!-- end col-->
        <div class="card mb-2">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Stock</h5>
            <div class="p-2">
                <div class="form-group mb-3">
                    {!! Form::label('stock', 'Stock:') !!}
                    {!! Form::text('stock', $product->stock ? $product->stock->stock : 0,['class'=>'form-control']) !!}
                </div>
            </div>

        </div>
        </div> <!-- end col-->

    <div class="row w-100">
        <div class="col-12">
            <div class="text-center mb-3">
                {!! Form::submit('Update',['class'=>'btn w-sm btn-success waves-effect waves-light']) !!}
                {!! Form::close() !!}
                <a href="{{route('products.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
            </div>
        </div> <!-- end col -->
    </div>--}}

    <form class="w-100" method="POST" enctype="multipart/form-data" action="{{action('AdminProductsController@update',$product->id)}}">
        <div class="row w-100">
            <div class="col-lg-6">
                @csrf {{--Geeft een hidden token mee zodat injecties niet kunnen gebeuren--}}
                @method('PATCH')
                <div class="card mb-2">
                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                    <div class="p-2">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="title" value="{{$product->title}}"><span class="highlight"></span><span
                                class="bar"></span>
                            <label class="ownlabel">Name</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="short_description" value="{{$product->short_description}}"><span
                                class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Short Description</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <textarea rows="10" cols="30" class="owninput" name="description" >{{$product->description}}</textarea><span
                                class="highlight"></span><span
                                class="bar"></span>
                            <label class="ownlabel">Description</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <select class="owninput" name="categories[]" multiple>
                                @for($i=0; $i < count($categories);$i++)
                                    @if($i < count($product->categories))
                                        @if($categories[$i]->id == $product->categories[$i]->id)
                                            <option selected value="{{$categories[$i]->id}}">{{$categories[$i]->name}}</option>
                                        @else
                                            <option value="{{$categories[$i]->id}}">{{$categories[$i]->name}}</option>
                                        @endif
                                    @else
                                        <option value="{{$categories[$i]->id}}">{{$categories[$i]->name}}</option>
                                    @endif
                                @endfor
                            </select><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Categories</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <input type="number" step="0.01" class="owninput" name="price" value="{{$product->price}}"><span
                                class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Price</label>
                        </div>

                        <div class="form-group position-relative mb-3">
                            <select class="owninput" name="is_active">
                                <option value="" disabled selected></option>
                                @if($product->is_active == 1)
                                    <option selected value="1">Active</option>
                                    <option value="0">Not Active</option>
                                @else
                                    <option selected value="0">Not Active</option>
                                    <option value="1">Active</option>
                                @endif
                            </select><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Status</label>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card mb-2">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>
                    <h6 class="text-uppercase ">Main Image</h6>
                    <p class="bg-warning">This photo will show up on the website as the main-image</p>
                    <div class="row p-2">
                        <div class="col-6">
                            <img src="{{$product->default_image ? asset($product->default_image->file) : 'GEEN FOTO'}}" class="img-thumbnail" alt="">
                        </div>
                        <div class="col-6">
                            <div class="form-group position-relative mb-3">
                                <input type="file" class="owninput" name="main_image"><span class="highlight"></span><span class="bar"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-uppercase">Detail Images</h6>
                    <p class="bg-warning">These photos will show up the detail page</p>
                    <div class="row p-2">
                        @foreach($product->detail_images as $photo)
                            <div class="col-3">
                                <img src="{{$photo->file ? asset($photo->file): 'GEEN FOTO'}}" class="img-thumbnail" alt="">
                            </div>
                        @endforeach
                    </div>
                    <div class="p-2">
                        <input type="file" class="owninput" name="images[]" multiple><span class="highlight"></span><span class="bar"></span>
                    </div>

                </div> <!-- end col-->
                <div class="card mb-2">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Stock</h5>
                    <div class="p-2">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="stock" value="{{$product->stock ? $product->stock->stock : 0}}"><span
                                class="highlight"></span><span
                                class="bar"></span>
                            <label class="ownlabel">Stock</label>
                        </div>
                    </div>

                </div>
            </div> <!-- end col-->
        </div>
        <div class="row w-100">
            <div class="col-12">
                <div class="text-center mb-3">
                    <button class="btn w-sm btn-success waves-effect waves-light" type="submit"><i class="fas fa-plus-circle">Update
                            Product</i></button>
                    <a href="{{route('products.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
                </div>
            </div> <!-- end col -->
        </div>
    </form>
@endsection

@extends('layouts.admin')
@section('title')
    Product editeren
@endsection
@section('content')
    <div class="col-lg-6">
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminProductsController@update',$product->id],'enctype'=>'multipart/form-data']) !!}

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
            <div class="row">
                @foreach($product->photos as $photo)
                    <div class="col-6">
                        <img src="{{asset($photo->file)}}" class="img-fluid" alt="">
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id] ]) !!}
                        <div class="form-group">
                            {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-sm btn-danger','type'=>'submit'] ) !!}
                        </div>
                        {!! Form::close() !!}
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
    </div>
@endsection

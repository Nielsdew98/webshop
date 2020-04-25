@extends('layouts.admin')
@section('title')
    Product toevoegen
@endsection
@section('content')
    <div class="col-lg-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store','enctype'=>'multipart/form-data']) !!}

        <div class="card mb-2">
            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
            <div class="p-2">
                <div class="form-group mb-3">
                    {!! Form::label('title', 'Product Name:') !!}
                    {!! Form::text('title', null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('shortdescription', 'Short description:') !!}
                    {!! Form::text('shortdescription', null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description', null,['class'=>'form-control','rows'=>'5']) !!}
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('categories', 'Categories:') !!}
                    {!! Form::select('categories[]',$categories,null,['class'=>'form-control','multiple'=>'multiple'])
                     !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group mb-3">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-6">
        <div class="card mb-2">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>
            <p class="text-uppercase bg-warning p-2">De eerste foto die je selecteer wordt de hoofdfoto die in de productlijst verschijnt</p>
            <div class="p-2">
                {!! Form::file('images[]',['class'=>'form-control dropzone','multiple'=>'multiple']) !!}
            </div>

        </div> <!-- end col-->
        <div class="card mb-2">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Stock</h5>
            <div class="p-2">
                <div class="form-group mb-3">
                    {!! Form::label('stock', 'Stock:') !!}
                    {!! Form::text('stock', null,['class'=>'form-control']) !!}
                </div>
            </div>

        </div>
        <div class="card">
            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Award</h5>
            <div class="p-2">
                <div class="form-group" id="awards">

                </div>
                <a href="" class="btn w-sm btn-success waves-effect waves-light" id="award" data-toggle="modal" data-target="#awardModal">Voeg award
                    toe</a>
            </div>
        </div>
    </div> <!-- end col-->
    <div class="row w-100">
        <div class="col-12">
            <div class="text-center mb-3">
                {!! Form::submit('Save',['class'=>'btn w-sm btn-success waves-effect waves-light']) !!}
                {!! Form::close() !!}
                <a href="{{route('products.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>

            </div>
        </div> <!-- end col -->
    </div>
@endsection

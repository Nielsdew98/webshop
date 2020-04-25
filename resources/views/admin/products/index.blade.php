@extends('layouts.admin')
@section('title')
    Alle Producten
@endsection
@section('content')
    <div class="col-12">
        <div class="card-box">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Search</label>
                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="status-select" class="mr-2">Sort By</label>
                            <select class="custom-select" id="status-select">
                                <option selected="">All</option>
                                <option value="1">Popular</option>
                                <option value="2">Price Low</option>
                                <option value="3">Price High</option>
                                <option value="4">Sold Out</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                        <a href="{{route('products.create')}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle
                        mr-1"></i> Product toevoegen</a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col-->
    <div class="col-12">
        <div class="row w-100">
            @if($products)
                @foreach($products as $product)
                    <div class="col-md-6 col-xl-3 mb-3">
                        <div class="card p-2 product-box">
                            <div class="product-action row">
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-success btn-xs waves-effect waves-light w-sm h-25
                                mr-2"><i class="mdi mdi-pencil"></i></a>
                                @if($product->deleted_at != null)
                                    <a href="{{route('admin.productRestore',$product->id)}}" class="btn btn-danger btn-xs waves-effect waves-light">
                                        <i class="fas fa-trash-restore"></i></a>
                                @else
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]])!!}
                                    <div class="form-group">
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger btn-xs waves-effect waves-light','type'=>'submit'] ) !!}
                                    </div>
                                    {!! Form::close() !!}
                                 @endif

                            </div>

                            <div>
                                @if(!empty($product->photos->first()->file))
                                    <img src="{{asset($product->photos->first()->file)}}" alt="product-pic" class="img-fluid" />
                                @endif

                            </div>
                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="{{route('products.edit',$product->id)}}" class="text-dark">
                                                {{$product->title}}</a>
                                        </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : {{$product->stock ? $product->stock->stock : 0}}pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="product-price-tag">
                                            €{{$product->price}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="text-muted">
                                            @if($product->deleted_at != null)
                                                Not-Active
                                            @else
                                                Active
                                            @endif
                                        </span>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                @endforeach
            @endif



        </div>
    </div>
@endsection

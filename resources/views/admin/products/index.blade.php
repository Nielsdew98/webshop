@extends('layouts.admin')
@section('title')
    Alle Producten
@endsection
@section('content')
    <div class="col-12">
        <div class="card-box">
            <div class="row mb-4">
                <div class="col-lg-8">
                    <form method="post" action="{{route('sortAdmin')}}">
                        @csrf
                        @method('POST')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Sort by:</label>
                            </div>
                            <select class="custom-select" name="sorting" id="status-select">
                                <option value="all">All</option>
                                <option value="az">az</option>
                                <option value="za">za</option>
                                <option value="prijsoplopend">Price Low</option>
                                <option value="prijsaflopend">Price High</option>
                                <option value="stockout">Sold Out</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-filter"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <a href="{{route('products.create')}}" class="btn btn-danger waves-effect waves-light"><i class="fas fa-plus-circle
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
                    <div class="col-md-6 col-xl-3 mb-3 d-flex align-items-stretch">
                        <div class="card p-2 product-box ">
                            <div class="product-action row">
                                <a href="{{route('products.edit',$product->id)}}" class="btn btn-success btn-xs waves-effect waves-light w-sm h-25
                                mr-2"><i class="fas fa-edit"></i></a>
                                @if($product->deleted_at != null)
                                    <a href="{{route('admin.productRestore',$product->id)}}" class="btn btn-danger btn-xs waves-effect waves-light">
                                        <i class="fas fa-trash-restore"></i></a>
                                @else
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]])!!}
                                    <div class="form-group">
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-danger btn-xs waves-effect
                                        waves-light','type'=>'submit'] ) !!}
                                    </div>
                                    {!! Form::close() !!}
                                 @endif

                            </div>

                            <div>
                                <img src="{{$product->default_image ? asset($product->default_image->file) : 'GEEN FOTO'}}" alt="product-pic"
                                         class="img-fluid" />
                            </div>
                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="{{route('products.edit',$product->id)}}" class="text-dark">
                                                {{$product->title}}</a>
                                        </h5>
                                        <div class="text-warning mb-2 font-13">
                                            @for($i=0;$i<\App\Review::where('product_id',$product->id)->avg('rating');$i++)
                                             <i class="fa fa-star"></i>
                                            @endfor
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
        {{$products->links()}}
    </div>
@endsection

@extends('layouts.admin')
@section('title')
    Discount toevoegen
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 mb-5">
        @include('includes.form_error')
        <form class="w-100" method="POST" action="{{action('AdminDiscountsController@update',$discount->id)}}">
            @csrf {{--Geeft een hidden token mee zodat injecties niet kunnen gebeuren--}}
            @method('PATCH')
            <div class="card mb-2">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                <div class="p-2">
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="name" value="{{$discount->name}}"><span class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">Discount Name</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="description" value="{{$discount->description}}"><span
                            class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Description</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <input type="number" min="1" max="100" class="owninput" name="percent" value="{{$discount->percent}}"><span
                            class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">Percent</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <select class="owninput" name="product_id">
                            <option value="" disabled selected></option>
                            @foreach($products as $product)
                                @if($discount->product_id == $product->id)
                                    <option selected value="{{$product->id}}">{{$product->title}}</option>
                                @else
                                    <option value="{{$product->id}}">{{$product->title}}</option>
                                @endif

                            @endforeach
                        </select><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Select the Product for the discount</label>
                    </div>
                    <div class="form-group ml-5 mb-3">
                        @if($discount->homepage == 1)
                            <input type="checkbox" checked class="form-check-input" id="homepage" name="homepage">
                            <label for="homepage">Promoted To Homepage</label>
                        @else
                            <input type="checkbox" class="form-check-input" id="homepage" name="homepage">
                            <label for="homepage">Promoted To Homepage</label>
                        @endif

                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="text-center mb-3">
                                <button class="btn w-sm btn-success waves-effect waves-light" type="submit"><i class="fas fa-plus-circle">
                                        Update Discount</i></button>
                                <a href="{{route('discounts.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

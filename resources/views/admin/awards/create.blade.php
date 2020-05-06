@extends('layouts.admin')
@section('title')
    Award toevoegen
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 mb-5">
        @include('includes.form_error')
        <form class="w-100" method="POST" action="{{action('AdminAwardsController@store')}}">
            @csrf {{--Geeft een hidden token mee zodat injecties niet kunnen gebeuren--}}
            @method('POST')
            <div class="card mb-2">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                <div class="p-2">
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="name"><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Award Name</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="year"><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Awardyear</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <select class="owninput" name="product_id">
                            <option value="" disabled selected></option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->title}}</option>
                            @endforeach
                        </select><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Select the Product for the award</label>
                    </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="text-center mb-3">
                                <button class="btn w-sm btn-success waves-effect waves-light" type="submit"><i class="fas fa-plus-circle">Create
                                        Award</i></button>
                                <a href="{{route('awards.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

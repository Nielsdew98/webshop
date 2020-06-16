@extends('layouts.admin')
@section('title')
    Product toevoegen
@endsection
@section('content')
    @include('includes.form_error')
    <form class="w-100" method="POST" enctype="multipart/form-data" action="{{action('AdminProductsController@store')}}">
        <div class="row w-100">
            <div class="col-lg-6">
                @csrf {{--Geeft een hidden token mee zodat injecties niet kunnen gebeuren--}}
                @method('POST')
                <div class="card mb-2">
                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                    <div class="p-2">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="title"><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Name</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="short_description"><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Short Description</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <label class="">Description</label>
                            <textarea rows="10" cols="30" class="owninput" id="product_description" name="description">
                            </textarea>
                            <span class="highlight"></span><span class="bar"></span>

                        </div>
                        <div class="form-group position-relative mb-3">
                            <select class="owninput" name="categories[]" multiple>
                                <option value="" disabled selected></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Categories</label>
                        </div>
                        <div class="form-group position-relative mb-3">
                            <input type="number" step="0.01" class="owninput" name="price"><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Price</label>
                        </div>

                        <div class="form-group position-relative mb-3">
                            <select class="owninput" name="is_active">
                                <option value="" disabled selected></option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
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
                    <div class="p-2">
                        <div class="form-group position-relative mb-3">
                            <input type="file" class="owninput" name="main_image"><span class="highlight"></span><span class="bar"></span>
                        </div>
                    </div>
                    <h6 class="text-uppercase">Detail Images</h6>
                    <p class="bg-warning">These photos will show up the detail page</p>
                    <div class="p-2">
                        <input type="file" class="owninput" name="images[]" multiple><span class="highlight"></span><span class="bar"></span>
                    </div>

                </div> <!-- end col-->
                <div class="card mb-2">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Stock</h5>
                    <div class="p-2">
                        <div class="form-group position-relative mb-3">
                            <input type="text" class="owninput" name="stock"><span class="highlight"></span><span class="bar"></span>
                            <label class="ownlabel">Stock</label>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Award</h5>
                    <div class="p-2">
                        <div class="form-group" id="awards">
                            <div class="form-group position-relative mb-3">
                                <input type="text" class="owninput" name="awardname" id="awardname"><span class="highlight"></span><span
                                    class="bar"></span>
                                <label class="ownlabel">Award Name</label>
                            </div>
                            <a class="btn w-sm btn-success waves-effect waves-light"
                            id="addaward"><i class="fas fa-plus-circle">Add Award</i></a>
                            <div class="form-group position-relative mb-3">
                                <select class="owninput" id="awardsselect" name="awards[]" multiple>
                                    @if(Session::has('awards'))
                                        @dd(\Illuminate\Support\Facades\Session::get('awards'))
                                    @endif
                                </select>
                                <span class="highlight"></span><span class="bar"></span>
                                <label class="ownlabel">Awards</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>
    <div class="row w-100">
        <div class="col-12">
            <div class="text-center mb-3">
                <button class="btn w-sm btn-success waves-effect waves-light" type="submit"><i class="fas fa-plus-circle">Create Product</i></button>
                <a href="{{route('products.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
            </div>
        </div> <!-- end col -->
    </div>
    </form>
@endsection


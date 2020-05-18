@extends('layouts.admin')
@section('title')
    All Discounts
@endsection
@section('content')
    <div class="col-12">
        <a href="{{route('discounts.create')}}" class="btn btn-primary my-3">Create Discount</a>
    </div>
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Discountname</th>
                <th scope="row">Description</th>
                <th scope="row">Product</th>
                <th scope="row">Percent</th>
                <th scope="row">Promoted to Homepage</th>
                <th scope="row">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($discounts)
                @foreach($discounts as $discount)
                    <tr>
                        <td>{{$discount->id}}</td>
                        <td>{{$discount-> name}}</td>
                        <td>{{$discount-> description}}</td>
                        <td>
                            {{$discount-> product->title}}
                        </td>

                        <td>{{$discount-> percent}}</td>
                        <td>
                            @if($discount->homepage == 1)
                                {{'YES'}}
                            @else
                                {{'NO'}}
                            @endif
                        </td>
                        <td>
                            <a href="{{route('discounts.edit',$discount->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                               data-original-title="Edit this discount"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminDiscountsController@destroy', $discount->id] ]) !!}
                                <div class="form-group">
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-sm btn-danger','type'=>'submit'] ) !!}
                                </div>
                                {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{ $discounts->links() }}
    </div>

@endsection

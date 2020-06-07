@extends('layouts.admin')
@section('title')
    All Categories
@endsection
@section('content')
    @if(Session::has('deleted_category'))
        <p class="alert alert-success">{{session('deleted_category')}}</p>
    @endif
    <div class="col-12">
        <a href="{{route('categories.create')}}" class="btn btn-primary my-3">Create category</a>
    </div>
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Category</th>
                <th scope="row"> Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>

                        <td>{{$category-> name}}</td>
                        <td>
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                               data-original-title="Edit this user"><i class="fas fa-edit"></i></a>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id] ]) !!}
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
        {{ $categories->links() }}
    </div>

@endsection

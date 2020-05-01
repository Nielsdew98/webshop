@extends('layouts.admin')
@section('title')
    Alle Medias
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 mb-5">
        <div class="card p-2">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">

                {!! Form::open(['method'=>'GET', 'action'=>'AdminMediasController@index']) !!}
                        <div class="form-group">
                            {!! Form::label('search','Selecteer het product waarvan je de fotos wilt zien:') !!}
                            {!! Form::select('product',$products,null,['class'=>'form-control']) !!}
                        </div>
                    {!! form::submit('zoek',['class'=>'btn w-sm btn-success waves-effect waves-light']) !!}
                    {!! Form::close() !!}
                </div>
            </div><!-- end col-->
        </div> <!-- end row -->
    </div>
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Photo</th>
                <th scope="row">filename</th>
                <th scope="row">Title Boardgame</th>
                <th scope="row">Actions</th>
            </tr>
            </thead>
            <tbody>
                @if($photos)
                    @foreach($photos as $photo)
                        <tr>
                            <td>{{$photo->id}}</td>
                            <td>
                                <img width="200" height="150" src="{{asset($photo->file)}}" alt="">
                            </td>
                            <td>{{$photo->file}}</td>
                            <td>
                                {{$photo->product->title}}
                            </td>
                            <td>
                                <a href="{{route('medias.edit',$photo->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                                   data-original-title="Edit this user"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id] ]) !!}
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
    </div>

@endsection

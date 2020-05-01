@extends('layouts.admin')
@section('title')
    Alle Awards
@endsection
@section('content')

    <div class="col-12">
        <a href="{{route('awards.create')}}" class="btn btn-primary my-3">Create Award</a>
    </div>
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Awardname</th>
                <th scope="row"> Awardyear</th>
                <th scope="row"> Product Name</th>
                <th scope="row"> Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($awards)
                @foreach($awards as $award)
                    <tr>
                        <td>{{$award->id}}</td>

                        <td>{{$award-> name}}</td>
                        <td>{{$award-> year}}</td>
                        <td>{{$award->product->title}}</td>
                        <td>
                            <a href="{{route('awards.edit',$award->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                               data-original-title="Edit this user"><i class="fa fa-edit"></i></a>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminAwardsController@destroy', $award->id] ]) !!}
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
        {{ $awards->links() }}
    </div>

@endsection

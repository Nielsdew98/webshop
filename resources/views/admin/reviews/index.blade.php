@extends('layouts.admin')
@section('title')
    Alle Reviews
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">product</th>
            <th scope="row">author</th>
            <th scope="row">Created at</th>
            <th scope="row">Updated at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
            <tr>
                <td>{{$review->id}}</td>
                <td>{{$review->product->title}}</td>
                <td>{{$review->user->name}}</td>
                <td>{{$review->created_at->diffForHumans()}}</td>
                <td>{{$review->updated_at->diffForHumans()}}</td>
                <td>
                    @if($review->is_active == 1)
                        {!! Form::open(['method'=>'PATCH','action'=>['AdminReviewsController@update',$review->id]]) !!}
                        <input type="hidden" name="is_active" value="0">
                        <div class="form-group">
                            {!! Form::submit('Un-approve', ['class'=>'btn btn-danger ']) !!}
                        </div>
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['method'=>'PATCH','action'=>['AdminReviewsController@update',$review->id]]) !!}
                        <input type="hidden" name="is_active" value="1">
                        <div class="form-group">
                            {!! Form::submit('Approve', ['class'=>'btn btn-succes']) !!}
                        </div>
                        {!! Form::close() !!}
                    @endif
                </td>
                <td>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminReviewsController@destroy', $review->id] ]) !!}
                    <div class="form-group">
                        {!! Form::submit('Delete Review ', ['class' => 'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary"><-</a>
    <div class="p-4 bg-success text-white my-4">
        <h1>{{$post->title}}</h1>
        <p>{!!$post->body!!}</p>
        <hr>
        <div class="mb-2">
            @if (!Auth::user()->id == $post->user_id)
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id],'method' =>'POST', 'class' => 'float-end']) !!}
            {!! Form::hidden('_method','DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning text-white float-end mx-3">Edit</a>
            @endif
        </div>
        <small>written on {{$post->created_at}}. By: {{$post->user['name']}}</small>
    </div>
@endsection
@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="p-4 bg-success text-white my-4">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{asset('storage/cover_images/'.$post->cover_image)}}" alt="cover_image" width="100%" />
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h1><a class="text-white text-decoration-none" href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                        <hr>
                        <small>written on {{$post->created_at}}. By: {{$post->user['name']}}</small>
                    </div>
                </div>    
            
            </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
        @else
            <p>No Post Found Here</p>
    @endif
@endsection
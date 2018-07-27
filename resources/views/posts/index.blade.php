@extends('layouts.app')
@section('content')
    <h1>ALL POSTS</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/cms/public/posts/{{$post->id}}">{{$post->title}}</a></h3><br>
                <p>{{$post->body}}</p>
                <small>Created at - {{$post->created_at}}</small><br><br>
                <small>Created by - {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts found</p>
    @endif
@endsection
@extends('layouts.app');
@section('content')
    <a href="/cms/public/posts" class="btn btn-default">Go back</a>
    <h2>{{$post->title}}</h2>
    <div>
        <p>{{$post->body}}</p>
    </div>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/cms/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/cms/public/posts/create" class='btn btn-primary'>Create New</a>
                    <h3>Your Posts</h3>
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                            <div class="well">
                                <h3><a href="/cms/public/posts/{{$post->id}}">{{$post->title}}</a></h3><br>
                                <small>Created at - {{$post->created_at}}</small><br>
                                <small>Created by - {{$post->user->name}}</small><br><br>
                                <a href="/cms/public/posts/{{$post->id}}/edit" class='btn btn-default'>Edit</a>
                                {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </div>
                        @endforeach
                    @else
                        <p>You have not created any posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

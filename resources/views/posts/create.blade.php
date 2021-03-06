@extends('layouts.app');
@section('content')
    <h1>CREATE POST</h1>
        {!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder' =>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder' =>'bodytext'])}}
            </div>
        {{Form::submit('Post'),['class'=>'btn btn-primary']}}
        {!! Form::close()!!}
    
@endsection


@extends('layouts.app')
@section('content')
<div class='container'>
        <h1>This is the Services Page!</h1>
        <p>Kampasi performs a range of tasks. See below</p>
        <h4>{{$name}}</h4>
        <ol>
             <li>{{$title}}</li>
        </ol>        
        <h4>Startups</h4>
        @if(count($startups) > 0)
         <ul class="list-group">
             @foreach($startups as $startup)
                 <li class="list-group-item">{{$startup}}</li>
             @endforeach
         </ul>
        @endif
</div>
       
@endsection
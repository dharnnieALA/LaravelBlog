@extends('layouts.app')

@section('content')
<div class='container'>
    <h1>This is the index!</h1>
    <h3>{{$title}}</h3>
    <p>Learning Laravel for Kampasi</p>
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</div>


@endsection
@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1 class="text-center my-5">{{$comic->title}}</h1>
    <div class="d-flex justify-content-around">
        <img class="w-25" src="{{$comic->thumb}}" alt="">
        <div class="w-50">
            <p>{{$comic->description}}</p>
            <span>{{$comic->price}} |</span>
            <span>{{$comic->series}} |</span>
            <span>{{$comic->type}}</span>
        </div>
    </div>
</div>
@endsection

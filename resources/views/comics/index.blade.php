@extends('layout.main')

@section('content')
<div class="container my-5">
    <ul>
        @foreach ($comics as $comic)
        <li>
            <h3>{{$comic->title}}</h3>
            <div class="w-25 p-3">
                <img class="img-thumbnail" src="{{$comic->thumb}}" alt="">
                <ul>
                    <li>
                        {{$comic->price}}
                    </li>
                    <li>
                        {{$comic->series}}
                    </li>
                </ul>
            </div>

        </li>
        @endforeach
    </ul>

</div>

@endsection

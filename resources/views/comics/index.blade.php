@extends('layout.main')

@section('content')
<div class="container my-5">




    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th class="pl-5" scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-primary">Show</button>
                    </a>
                    <a href="{{route('comics.create')}}">
                        <button type="button" class="btn btn-secondary">Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>

@endsection

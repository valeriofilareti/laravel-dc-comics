@extends('layout.main')

@section('content')
<div class="container my-5">

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
    @endif

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
                <td class="d-flex">
                    <a class="mx-1" href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-primary">Show</button>
                    </a>
                    <a class="mx-1" href="{{ route('comics.edit', $comic->id)}}">
                        <button type="button" class="btn btn-secondary">Edit</button>
                    </a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" onsubmit="return confirm('eliminare?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mx-1">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection

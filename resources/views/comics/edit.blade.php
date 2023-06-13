@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1>Edit</h1>

    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('comics.update', $comic) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group my-3">
            <label for="title">Title</label>
            <input value="{{old('title', $comic->title)}}" name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title">
        </div>
        @error('title')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group my-3">
            <label for="thumb">Thumb</label>
            <input value="{{old('thumb', $comic->thumb)}}" name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" placeholder="Enter Thumb">
        </div>
        @error('thumb')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group my-3">
            <label for="price">Price</label>
            <input value="{{old('price', $comic->price)}}" name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Enter Price">
        </div>
        @error('price')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group my-3">
            <label for="series">Series</label>
            <input value="{{old('series', $comic->series)}}" name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" placeholder="Enter Series">
        </div>
        @error('series')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group my-3">
            <label for="type">Type</label>
            <input value="{{old('type', $comic->type)}}" name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Enter Type">
        </div>
        @error('type')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group my-3">
            <label for="description">Description</label>
            <input value="{{old('description', $comic->description)}}" name="description" type="text-area" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enter Description">
        </div>
        @error('description')
        <p>{{$message}}</p>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

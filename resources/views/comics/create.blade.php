@extends('layout.main')

@section('content')
<div class="container my-5">
    <h1>create</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        <div class="form-group my-3">
            <label for="titolo">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title">
        </div>
        <div class="form-group my-3">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" placeholder="Enter Thumb">
        </div>
        <div class="form-group my-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Enter Price">
        </div>
        <div class="form-group my-3">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Enter Series">
        </div>
        <div class="form-group my-3">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Enter Type">
        </div>
        <div class="form-group my-3">
            <label for="description">Description</label>
            <input type="text-area" class="form-control" id="description" placeholder="Enter Description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

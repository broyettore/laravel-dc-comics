@extends('layouts.app');

@section('page.main')
<div class="container d-flex justify-content-between py-2">
    <h2>Modify a comic book : {{ $comic->title }}</h2>
    <button type="button" class="btn btn-primary mb-3">
        <a href="{{ route("comics.index") }}">Torna al menu principale</a>
    </button>
</div>
<div class="container py-2">
    <div class="container py-2">
        <form action="{{ route("comics.update", $comic->id ) }}" method="POST">
            @csrf
            @method("PUT")
            
            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input type="text" class="form-control" id="thumb"  name="thumb">
            </div>
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title"  name="title">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series"  name="series">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price"  name="price">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Date</label>
                <input type="text" class="form-control" id="sale_date"  name="sale_date">
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description"  name="description">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type"  name="type">
            </div>
    
            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists"  name="artists">
            </div>
    
            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers"  name="writers">
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
        <button type="button" class="btn btn-primary mb-3">
            <a href="{{ route("comics.index") }}">Torna al menu principale</a>
        </button>
    </div>
</div>
    
@endsection
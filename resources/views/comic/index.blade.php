@extends('layouts.app')

@section('page.main')
    <div class="container d-flex flex-wrap justify-content-between py-2">
        <h2 class="mb-3">DC COMICS LIST</h2>
        <button type="button" class="btn btn-primary mb-3">
            <a href="{{ route("comics.create") }}">Add a comic book</a>
        </button>
    </div>
    <div class="container d-flex flex-wrap justify-content-between py-2">
        @foreach ($comics as $comic)
        <div class="card ms-card" style="width: 18rem;">
            <a href="{{ route("comics.show", $comic->id) }}">
                <img src="{{  $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
            </a>
            <div class="card-body px-0">
              <h5 class="card-title">{{ $comic["title"] }}</h5>
              <p class="card-text">{{ $comic["sale_date"] }}</p>
              <div class="card-end d-flex">
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Delete</button>
                <div class="offcanvas offcanvas-top ms-offcanvas d-flex flex-column align-items-center" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                    <h5 id="offcanvasTopLabel" class="mb-3">Are you sure that you want to delete it ?</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
@endsection
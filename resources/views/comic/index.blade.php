@extends('layouts.app')

@section('page.main')
    <div class="container d-flex flex-wrap justify-content-between py-2">
        @foreach ($comics as $comic)
        <div class="card ms-card" style="width: 18rem;">
            <a href="{{ route("comics.show", $comic->id) }}">
                <img src="{{  $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $comic["title"] }}</h5>
              <p class="card-text">{{ $comic["sale_date"] }}</p>
            </div>
          </div>
        @endforeach
    </div>
@endsection
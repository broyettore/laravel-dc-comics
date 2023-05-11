@extends('layouts.app')

@section('page.main')
<div class="container py-2">
    <h2 class="mb-3">{{ $comic->title }}</h2>

    <div class="card ms-card" style="width: 18rem;">
        <img src="{{  $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body px-0">
          <p class="card-text mb-2">{{ $comic->description }}</p>
          <button type="button" class="btn btn-primary mb-3">
            <a href="{{ route("comics.index") }}">Torna al menu principale</a>
        </button>
        </div>
      </div>
</div>
@endsection
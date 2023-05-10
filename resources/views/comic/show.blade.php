@extends('layouts.app')

@section('page.main')
<div class="container py-2">
    <h2 class="mb-3">{{ $comic->title }}</h2>

    <div class="card ms-card" style="width: 18rem;">
        <img src="{{  $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
          <p class="card-text mb-2">{{ $comic->description }}</p>
          <a href="{{ route("comics.index") }}">Torna al menu principale</a>
        </div>
      </div>
</div>
@endsection
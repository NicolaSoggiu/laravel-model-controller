@extends('layouts.base')

@section("contents")

<div class="row g-3 row-cols-3">
    @foreach($collMovies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                <h5 class="card-title">{{ $movie->title}}</h5>
                <h5 class="card-title">{{ $movie->orginal_title}}</h5>
                <h5 class="card-title">{{ $movie->nationality}}</h5>
                <h5 class="card-title">{{ $movie->date}}</h5>
                <h5 class="card-title">{{ $movie->vote}}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
@extends('layouts.base')

@section("contents")

<h2 class="text-center text-danger p-5"> Movies List : </h2>

<div class="row g-3 row-cols-3">
    @foreach($collMovies as $movie)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                <h5 class="card-title"> Title : {{ $movie->title}}</h5>
                <h5 class="card-title"> Original Title : {{ $movie->original_title}}</h5>
                <h5 class="card-title"> Language : {{ $movie->nationality}}</h5>
                <h5 class="card-title"> Release date : {{ $movie->date}}</h5>
                <h5 class="card-title"> Vote : {{ $movie->vote}}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>

<button type="button" class="btn btn-light my-5">
    <a href="/" class="text-decoration-none text-dark">Go back to Homepage </a>
</button>

@endsection
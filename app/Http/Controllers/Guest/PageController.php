<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function index() {
        return view("homepage");
    }

    public function movies() {
        $collMovies = Movie::all();
        return view("movies", compact("collMovies"));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {

        $title = "I nostri film:";

        $movies = Movie::all();
        // dd("movies");
        
        return view('home', compact("title", "movies"));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();

        // dd($movies);

        return view('index', compact('movies'));
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);

        return view('show', compact('movie'));
    }
}

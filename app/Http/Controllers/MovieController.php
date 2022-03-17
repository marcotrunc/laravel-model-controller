<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Movie;

class MovieController extends Controller
{
    public function index(Request $req)
    {
        $search = $req->input('search');

        $films = Movie::all();
        $movies = $films;
        foreach ($films as $film) {
            if ($film->title == $search) {
                $movies = [];
                $movies[] = $film;
                $search = '';
            }
        }

        return view('movies.index', compact('movies')); //view return the blade file
    }



    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}

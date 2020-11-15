<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::query()
        ->where('votes_nr','>',1000000)   
        ->orderBy('rating','desc')
        ->get();
 
        return $movies;
    }
    public function myMovie()
    {
        $movies = Movie::where('id','=', 1)->get();

        return $movies;
    }
}

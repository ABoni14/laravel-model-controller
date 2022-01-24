<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function films(){
        $films = Film::all();
        dump($films);
        return view("films", compact("films"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view("home");
    }

    public function attori() {
        return view("attori");
    }

    public function films() {
        return view("films");
    }
}



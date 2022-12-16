<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('layouts.app');
    }

    public function card() {
        $movies = Movie::all();
        return view('card', compact('movies'));
    }
}

<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    
    
    public function comics()
    {
        return view('comics', ['comics' => Comics::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function showComics(Comics $comic)
    {
        $title = $comic->title;
        return view('show_comics', compact('comic', 'title'));
    }

    
}


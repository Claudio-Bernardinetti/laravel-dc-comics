<?php

namespace App\Http\Controllers\Guests;

use App\Models\Comics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dcComics = Comics::all();
        return view('comics.index', compact('dcComics'));
        dd($dcComics);
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.dcComics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comics = Comics::create($request->all());
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comics $dcComics)
    {
        return view('dcComics.show', compact('dcComics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


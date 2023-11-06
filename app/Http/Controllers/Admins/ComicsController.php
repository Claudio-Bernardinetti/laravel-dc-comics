<?php

namespace App\Http\Controllers\Admins;

use App\Models\Comics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();
        return view('admins.comics.index', compact('comics'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
     public function store(Request $request)
     {
        $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'price' => 'nullable',
            'thumb' => 'nullable|image|max:600'

        ]);
         /* $data = $request->all(); */
 
         if ($request->has('thumb')) {
             $file_path = Storage::put('comics_img', $request->thumb);
             
             $val_data['thumb'] = $file_path;
         }
 
         //dd($file_path);
         //dd($data);
 
         $comic = Comics::create($val_data);
         
 
         return to_route('comics.index', $comic)->with('message', 'Item successfully created!');;
     }

    /**
     * Display the specified resource.
     */
    public function show(Comics $comic)
    {
        //dd($comic);
        return view('admins.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comics $comic)
    {
        

        return view('admins.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comic)
    {

        $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'price' => 'nullable',
            'thumb' => 'nullable|image|max:600'

        ]);

        /* $data = $request->all(); */

        if ($request->has('thumb') && $comic->thumb) {
            Storage::delete($comic->thumb);
            $file_path = Storage::put('comics_img', $request->thumb);
            $val_data['thumb'] = $file_path;
        }

        //dd($file_path);
        //dd($data);

        $comic->update($val_data);
        return to_route('comics.index')->with('message', 'Item successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comic)
    {

        if (!is_null($comic->thumb)) {
            Storage::delete($comic->thumb);
        }

        $comic->delete();
        return to_route('comics.index')->with('message', 'Item successfully deleted!');
    }
}



    
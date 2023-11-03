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
        return view('admins.comics.index.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     
    public function store(Request $request)
    {
        //dd($request->all());

        $data = $request->all();
        //$file_path = null;
        if ($request->has('thumb')) {
            $file_path =  Storage::put('comics_img', $request->thumb);
            $data['thumb'] = $file_path;
        }
         dd($file_path);


        // Add a new recorin the the db
        //Without mass assignment of fields
        /* $saber = new LightSaber();
        $saber->name = $request->name;
        $saber->price = $request->price;
        $saber->cover_image = $file_path;
        $saber->save(); */
           
        //With mass assignment
        //dd($data);
        $comic = Comics::create($data);

        // LightSaber::fill() // alternativa


        // redirectthe user to a get route, follow the pattern ->  POST/REDIRECT/GET
        // return redirect()->route('lightsabers.index')
        return to_route('comics.show', $comic); // new function to_route() laravel 9
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
        

        return view('admins.comics.edit',['comic'=>$comic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comics $comic)
    {
        $Comics = $request->all();
        
        if ($request->has('thumb') && $comic->thumb) {

            //siccome le tue immagini sono state precaricate con il seeder
            //l'immagine non si trova fisicamente sul tuo computer ma in internet
            //quindi tutte le immagini già caricate con il seeder non possono essere cancellate qui
            //todo: fai la create
           Storage::delete($comic->thumb);
           
           $newImageFile = $request->thumb;
           $path = Storage::put('comics_img', $newImageFile);
           $data['thumb'] = $path;
        }
        $comic->update($Comics);
        return to_route('comics.show', $comic);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}


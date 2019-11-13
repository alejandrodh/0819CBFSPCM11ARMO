<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $peliculas = Movie::where('title', 'like', 'Avatar')->get();
      $peliculas = Movie::all();

      // $actores = [
      //   "Tom Cruise",
      //   "Sivester Stallone",
      //   "Michael Fox",
      //   "Irene Cara",
      //   "Kevin Bacon"
      // ];
      // $actores = [];
      //$vac = compact('peliculas');

      return view ('peliculas', compact('peliculas')); //Busca: /resources/views/peliculas.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $pelicula = Movie::find($id);
        $pelicula = Movie::find($id);

        return view('pelicula', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

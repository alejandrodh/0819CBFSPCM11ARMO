<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas fijas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function(){
  return "Estoy en demo.";
});

//Rutas paremetrizadas con parámetro obligatorio.
Route::get('/parametro/{param}', function($param){
  return "El parámetro ingresado es: $param";
});

//Rutas paremetrizadas con parámetro optativo.
Route::get('/parametroOptativo/{param?}', function($param = "Ojo, no escribimos parámetro."){
  return "El parametro ingresado es: $param";
});

Route::get('/peliculas', function(){

  $peliculas = [
    "Top Gun",
    "Terminator",
    "Rocky",
    "Rambo",
    "Vovler al futuro",
    "Flashdance",
    "Footloose"
  ];
  $actores = [
    "Tom Cruise",
    "Sivester Stallone",
    "Michael Fox",
    "Irene Cara",
    "Kevin Bacon"
  ];
  // $actores = [];
  //$vac = compact('peliculas');

  return view ('peliculas', compact('peliculas', 'actores')); //Busca: /resources/views/peliculas.blade.php
});

Route::get('/actores', function (){
  $actores = [
    "Tom Cruise",
    "Sivester Stallone",
    "Michael Fox",
    "Irene Cara",
    "Kevin Bacon"
  ];

  return view('actores', compact('actores'));
});



















//

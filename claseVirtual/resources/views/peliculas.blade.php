@extends('master')
@section('title', 'Películas') {{-- Versión corta. --}}

@section('content')
      <h1>Listado de películas</h1>
      <ul>
      @foreach ($peliculas as $pelicula)

        {{-- @if ($pelicula !== "Rocky")
          <li> {{ $pelicula }} </li>
        @endif --}}

        @unless ($pelicula == "Rocky")
          <li> {{ $pelicula }} </li>
        @endunless

      @endforeach
      </ul>

      <a href="/actores"> Ver actores </a>
@endsection

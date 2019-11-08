@extends('master')

@section('title')
  Actores
@endsection {{-- Versión larga. --}}

@section('content')
      <h1>Listado de actores</h1>
      <ul>
        @forelse ($actores as $actor)
          <li>{{ $actor }}</li>
        @empty
          <p>La lista no tiene actores en este momento.</p>
        @endforelse

      </ul>

      <a href="/peliculas"> Ver peliculas </a>
@endsection

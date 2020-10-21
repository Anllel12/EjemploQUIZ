@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section('barralateral')
    @parent

    <p>Esta parte se añade a la barra lateral original (no la sobreescribe). Pertenece a la página 01</p>
@endsection

@section('contenido')
    <h2>Este es el body de la página 01.</h2>
    <a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pullright">Historia</a>
    <a href="{{ url('pregunta', ['Economia']) }}" class="btn btn-xs btn-info pullright">Economia</a>
    <a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pullright">Inglés</a>
    <a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pullright">Historia un json</a>

@endsection
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 02 del proyecto')

@section('barralateral')
    @parent

    <p>Aquí podría no poner nada si quisiera</p>
@endsection

@section('contenido')
    <h3>Este es el body de la página 02.</h3>
    <h1> {{ $tema }}</h1>
    <a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">página 01</a>
@endsection
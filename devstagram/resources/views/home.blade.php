@extends('layouts.app') <!--Se le añade el punto para concatenar las carpetas-->

@section('titulo')
    Pagina principal
@endsection

@section('contenido')

<x-listar-post :posts="$posts" />
@endsection

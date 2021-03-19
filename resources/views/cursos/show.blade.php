@extends('layouts.plantilla')

@section('title','Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
    
    <p><strong>Categoria:</strong>{{$curso->categotia}}</p>
    <p><strong>{{$curso->descripcion}}</strong></p>
@endsection

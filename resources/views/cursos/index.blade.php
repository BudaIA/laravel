@extends('layouts.plantilla')
@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la página Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach($cursos as $key => $curso)
            <li>
               <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>            
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection

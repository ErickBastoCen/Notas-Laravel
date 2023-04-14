@extends ('layout/template')

@section('title', 'Asignaturas | TEC MOTUL')

@section('contenido')

<main>
    <div >
        <h1 class="text-3xl font-bold underline">
            Listado de Asignaturas
        </h1>
    </div>
    <br>
    <br>
    <a href="{{ url('asignatura/create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Asignaturas
    </a>
    <br>
</main>

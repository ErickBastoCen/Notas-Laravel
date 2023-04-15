@extends ('layout/template')

@section('title', 'Notas | TEC MOTUL')

@section('contenido')

<main>
    <div >
        <h1 class="text-3xl font-bold underline">
            Listado de Notas
        </h1>
    </div>
    <br>
    <br>
    <a href="{{ url('nota/create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Notas
    </a>
    <br>
</main>

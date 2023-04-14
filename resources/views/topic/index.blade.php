@extends ('layout/template')

@section('title', 'Temas | TEC MOTUL')

@section('contenido')

<main>
    <div >
        <h1 class="text-3xl font-bold underline">
            Listado de Temas
        </h1>
    </div>
    <br>
    <br>
    <a href="{{ url('tema/create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Temas
    </a>
    <br>
</main>

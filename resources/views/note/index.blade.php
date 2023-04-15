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
    <br>
    <center>
        <table class="table-fixed">
            <thead>
                <tr class="bg-yellow-400">
                    <th>ID</th>
                    <th>Anotaciones</th>
                    <th>Palabras clave</th>
                    <th>Resumen</th>
                    <th>ID de Usuario</th>
                    <th>ID del Tema</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{ $nota->id }}</td>
                        <td>{{ $nota->anotaciones }}</td>
                        <td>{{ $nota->palabras_clave }}</td>
                        <td>{{ $nota->resumen }}</td>
                        <td>{{ $nota->user_id }}</td>
                        <td>{{ $nota->topic_id }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</main>

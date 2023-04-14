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
    <center>
        <table class="table-fixed">
            <thead>
                <tr class="bg-yellow-400">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Clave</th>
                    <th>Ingeniería</th>
                    <th>Semestre</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asignaturas as $asignatura)
                    <tr>
                        <td>{{ $asignatura->id }}</td>
                        <td>{{ $asignatura->nombre }}</td>
                        <td>{{ $asignatura->clave }}</td>
                        <td>{{ $asignatura->ing }}</td>
                        <td>{{ $asignatura->semestre }}</td>
                        <td><a href="{{ url('asignatura/'.$asignatura->id.'/edit') }}" ><img src="https://cdn.icon-icons.com/icons2/34/PNG/256/documentediting_editdocuments_text_documentedi_2820.png" alt="Editar" height="32px" width="32px"></a></td>
                        <td></td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</main>

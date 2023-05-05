@extends ('layout/template')

@section('title', 'Notas | TEC MOTUL')

@section('contenido')

<main>
    <div class="bg-blue-100 dark:bg-blue-900">
        <h1 class="text-3xl font-bold underline text-white">
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
        <table class="table-fixed border-separate border-spacing-2 border border-slate-500">
            <thead>
                <tr class="bg-yellow-400">
                    <th>Anotaciones</th>
                    <th>Palabras clave</th>
                    <th>Resumen</th>
                    <th>Fecha de modificación</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{ $nota->anotaciones }}</td>
                        <td>{{ $nota->palabras_clave }}</td>
                        <td>{{ $nota->resumen }}</td>
                        <td>{{ $nota->updated_at }}</td>
                        <td><a href="{{ url('nota/'.$nota->id) }}" ><img src="https://cdn.icon-icons.com/icons2/2065/PNG/512/view_show_icon_124811.png" alt="Ver" height="30px" width="30px"></a></td>
                        <td><a href="{{ url('nota/'.$nota->id.'/edit') }}" ><img src="https://cdn.icon-icons.com/icons2/34/PNG/256/documentediting_editdocuments_text_documentedi_2820.png" alt="Editar" height="42px" width="42px"></a></td>
                        <td><br>
                            <form action="{{ url('nota/'.$nota->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit"><img src="https://cdn.icon-icons.com/icons2/1380/PNG/512/vcsconflicting_93497.png" alt="Eliminar" height="40px" width="40px" onclick="return confirm(&quot;Después de esta acción ya no se podrá recuperar¿Continuar?&quot;)"></button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        
        <a href="{{ url('dashboard')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Volver al inicio
        </a>
    </center>

</main>

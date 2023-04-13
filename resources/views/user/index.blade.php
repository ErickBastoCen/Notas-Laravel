@extends ('layout/template')

@section('title', 'Usuario | TEC MOTUL')

@section('contenido')

<main>
    <div >
        <h1 class="text-3xl font-bold underline">
            Listado de Usuarios
        </h1>
    </div>
    <br>
    <a href="{{ url('usuario/create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Usuario
    </a>
    <br>
    <center>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td><a href="{{ url('usuario/'.$usuario->id.'/edit') }}">Editar Usuario</a></td>
                        <td><form action="{{ url('usuario/'.$usuario->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</main>

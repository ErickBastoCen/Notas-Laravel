@extends ('layout/template')

@section('title', 'Editar Asignatura | TEC MOTUL')

@section('contenido')


<main>
    <div>
        <h1 class="text-3xl font-bold underline">Editar Asignaturas</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    </div>
    <center>
        <form action="{{url('asignatura/'.$asignatura->id )}}" method="post">
            @method("PUT")
            @csrf
            <div>
                <label for="nombre"> Nombre: </label>
                <div>
                    <input type="text" name="nombre" id="nombre" value="{{ $asignatura->nombre }}">
                </div>
            </div>

            <div>
                <label for="clave"> Clave: </label>
                <div>
                    <input type="text" name="clave" id="clave" value="{{ $asignatura->clave }}">
                </div>
            </div>

            <div>
                <label for="ingenieria"> Ingeniería: </label>
                <div>
                    <input type="text" name="ingenieria" id="ingenieria" value="{{ $asignatura->ing }}">
                </div>
            </div>

            <div>
                <label for="semestre"> Semestre: </label>
                <div>
                    <input type="text" name="semestre" id="semestre" value="{{ $asignatura->semestre }}">
                </div>
            </div>
            

            <a href="{{url('asignatura')}}">
                    Regresar
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                    Registrar
            </button>
        </form>
    </center>
</main>
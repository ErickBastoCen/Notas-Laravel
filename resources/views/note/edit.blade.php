@extends ('layout/template')

@section('title', 'Editar Notas | TEC MOTUL')

@section('contenido')


<main>
    <div>
        <h1 class="text-3xl font-bold underline">Editar Notas</h1>

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
        <form action="{{url('nota/'.$notas->id )}}" method="post">
            @method("PUT")
            @csrf
            <div>
                <label for="anotacion"> Anotaciones: </label>
                <div>
                    <input type="text" name="anotacion" id="anotacion" value="{{ $notas->anotaciones }}">
                </div>
            </div>

            <div>
                <label for="palabras_clave"> Palabras Clave: </label>
                <div>
                    <input type="text" name="palabras_clave" id="palabras_clave" value="{{ $notas->palabras_clave }}">
                </div>
            </div>

            <div>
                <label for="resumen"> Resumen: </label>
                <div>
                    <input type="text" name="resumen" id="resumen" value="{{ $notas->resumen }}">
                </div>
            </div>

            <div>
                <label for="user_id"> Usuario: </label>
                <div>
                    <select name="user_id" id="user_id">
                        <option value="">Seleccione un usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label for="topic_id"> Tema: </label>
                <div>
                    <select name="topic_id" id="topic_id">
                        <option value="">Seleccione un tema</option>
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->tema }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{url('nota')}}">
                    Regresar
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                    Registrar
            </button>
        </form>
    </center>
</main>
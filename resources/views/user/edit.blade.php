@extends ('layout/template')

@section('title', 'Actualizar | TEC MOTUL')

@section('contenido')


<main>
    <div>
        <h1 class="text-3xl font-bold underline">Actualizar Usuario</h1>

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
        <form action="{{url('usuario/'.$usuario->id )}}" method="post">
            @method("PUT")
            @csrf
            <div>
                <label for="nombre"> Nombre: </label>
                <div>
                    <input type="text" name="nombre" id="nombre" value="{{ $usuario->name }}">
                </div>
            </div>

            <div>
                <label for="email"> Email: </label>
                <div>
                    <input type="text" name="email" id="email" value="{{ $usuario->email }}">
                </div>
            </div>


            <div>
                <label for="contraseña"> Contraseña: </label>
                <div>
                    <input type="password" name="contraseña" id="contraseña" value="">
                </div>
            </div>

            <div>
                <label for="contraseña_2"> Verifique su Contraseña: </label>
                <div>
                    <input type="password" name="contraseña_2" id="contraseña_2" value="">
                </div>
            </div>
            <a href="{{url('usuario')}}">
                    Regresar
            </a>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                    Registrar
            </button>
        </form>
    </center>
</main>
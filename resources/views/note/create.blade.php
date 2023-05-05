@extends ('layout/template')

@section('title', 'Agregar Notas | TEC MOTUL')

@section('contenido')


<main>
    <div class="bg-blue-100 dark:bg-blue-900">
        <h1 class="text-3xl font-bold underline text-white">Agregar Notas</h1>
    </div>
    
    <div>
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
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
                <p class="font-medium text-lg">Toma notas. Apunta lo que veas en clases. No olvides que es para un futuro</p>
          </div>
        </div>
        <br>
        <div class="bg-gray-400">
        <form action="{{url('nota')}}" method="post">
            @csrf
            <div>
                <label for="anotacion" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Anotaciones: </label>
                <div>
                    <input type="text" name="anotacion" id="anotacion" value="{{ old('anotacion') }}"class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
              </div>
            </div>

            <div>
                <label for="palabras_clave" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Palabras Clave: </label>
                <div>
                    <input type="text" name="palabras_clave" id="palabras_clave" value="{{ old('palabras_clave') }}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" />
              </div>
            </div>

            <div>
                <label for="resumen" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Resumen: </label>
                <div>
                    <input type="text" name="resumen" id="resumen" value="{{ old('resumen') }}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
              </div>
            </div>

            <div>
            
                <label for="user_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Usuario: </label>
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
                <label for="topic_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Tema: </label>
                <div>
                    <select name="topic_id" id="topic_id">
                        <option value="">Seleccione un tema</option>
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->tema }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>            
            <br>
            <div>
                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                            Registrar
                    </button>
                </div>
                <br>            
            <br>
            </div>
            </div>
        </form> 
    </div>
    <div>
            <a href="{{url('nota')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Regresar
            </a> 

        </div>
    </center>
</main>
@extends ('layout/template')

@section('title', 'Editar Recordatorio | TEC MOTUL')

@section('contenido')


<main>
    <div class="bg-blue-100 dark:bg-blue-900">
        <h1 class="text-3xl font-bold underline text-white">Editar Recordatorio</h1>
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
                <p class="font-medium text-lg">Planea mejor tus actividades.</p>
        </div>
        <br>
</div>
        <form action="{{url('recordatorios/'.$recordatorios->id )}}" method="post">
            @method("PUT")
            @csrf
            <div>
                <label for="note_id" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Nota: </label>
                <div>
                    <select name="note_id" id="note_id">
                        <option value="">Seleccione una nota</option>
                        @foreach ($notes as $note)
                            <option value="{{ $note->id }}">{{ $note->resumen }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <br>
            <div>
                <label for="importancia" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Día de recordatorio: </label>
                <div>
                    <select name="importancia" id="importancia" >
                        <option value="Pendiente">Pendiente</option>
                        <option value="Realizado">Realizado</option>
                        
                    </select>
                </div>
            </div>
            <br>
            <br>
            <div>
                <label for="fecha" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Día de recordatorio: </label>
                <div>
                    <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
              </div>
            </div>
            <br>
            <br>
            <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-4">
                        Registrar
                    </button>
                </div>
            </div>
            <a href="{{url('recordatorios')}}">
                    Regresar
            </a>            
        </form>
        </div>
    </center>
</main>
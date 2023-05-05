@extends ('layout/template')

@section('title', 'Editar Notas | TEC MOTUL')

@section('contenido')


<main>
    <div class="bg-blue-100 dark:bg-blue-900">
        <h1 class="text-3xl font-bold underline text-white">Notas</h1>
        
    </div>
    <center>
    <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
                <p class="font-medium text-lg">Tus apuntes siempre listos</p>
          </div>
        </div>
        <br>
        <div class="bg-gray-400">
            <div>
                <label class= "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="anotacion"> Anotaciones: </label>
                <div>
                    <input type="text" name="anotacion" id="anotacion" value="{{ $notas->anotaciones }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" readonly>
                </div>
            </div>

            <div>
                <label class= "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="palabras_clave"> Palabras Clave: </label>
                <div>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="palabras_clave" id="palabras_clave" value="{{ $notas->palabras_clave }}" readonly>
                </div>
            </div>

            <div>
                <label class= "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="resumen"> Resumen: </label>
                <div>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="resumen" id="resumen" value="{{ $notas->resumen }}" readonly>
                </div>
            </div>

            <div>
                <label class= "block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="resumen"> Tema: </label>
                <div>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="resumen" id="resumen" value="{{ $notas->topic_id }}"readonly>
                    
                </div>
            </div>
        </div>


            <div>
                <a href="{{url('nota')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Regresar
                </a> 
            </div> 
        </div>
    </center>
</main>
@extends ('layout/template')

@section('title', 'Editar Notas | TEC MOTUL')

@section('contenido')


<main>
    <div>
        <h1 class="text-3xl font-bold underline">Notas</h1>
        
    </div>
    <center>
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


            <a href="{{url('nota')}}">
                    Regresar
            </a>
    </center>
</main>
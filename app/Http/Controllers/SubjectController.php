<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('subject.index', ['asignaturas' => $subjects]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            
            'nombre' =>'required|max:255',
            'clave' =>'required|max:7',
            'ingenieria' =>'required|max:3',
            'semestre'=>'required|max:1',
            
        ]);
        $asignatura = new Subject();
        $asignatura->nombre = $request->input('nombre');
        $asignatura->clave = $request->input('clave');
        $asignatura->ing = $request->input('ingenieria');
        $asignatura->semestre = $request->input('semestre');
        $asignatura->save();
        $subjects = Subject::all();
        return view('subject.index', ['asignaturas' => $subjects]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subjects = Subject::find($id);
        return view('subject.edit', ['asignatura' => $subjects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            
            'nombre' =>'required|max:255',
            'clave' =>'required|max:7',
            'ingenieria' =>'required|max:3',
            'semestre'=>'required|max:1',
            
        ]);
        $asignatura = Subject::find($id);
        $asignatura->nombre = $request->input('nombre');
        $asignatura->clave = $request->input('clave');
        $asignatura->ing = $request->input('ingenieria');
        $asignatura->semestre = $request->input('semestre');
        $asignatura->save();
        $subjects = Subject::all();
        return view('subject.index', ['asignaturas' => $subjects]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asignatura = Subject::find($id);
        $asignatura->delete();
        $subjects = Subject::all();
        return view('subject.index', ['asignaturas' => $subjects]);
    }
}

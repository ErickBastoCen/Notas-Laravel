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
        return view('subject.index');
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
        return view('subject.index');
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
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }
}

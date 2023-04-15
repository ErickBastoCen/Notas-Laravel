<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('note.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create', ['topics' => Topic::all()],['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            
            'anotacion' =>'required|max:500',
            'palabras_clave' =>'required|max:500',
            'resumen' =>'required|max:500',
            'user_id' =>'required|',
            'topic_id' =>'required|',
            
        ]);
        $nota = new Note();
        $nota->anotaciones = $request->input('anotacion');
        $nota->palabras_clave = $request->input('palabras_clave');
        $nota->resumen = $request->input('resumen');
        $nota->user_id = $request->input('user_id');
        $nota->topic_id = $request->input('topic_id');
        $nota->save();
        return view('note.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}

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
        return view('note.index',['notas' => Note::all()]);
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
        return view('note.index',['notas' => Note::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $notes = Note::find($id);
        return view('note.show', ['notas' => $notes], ['users' => User::all(), 'topics' => Topic::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notes = Note::find($id);
        return view('note.edit', ['notas' => $notes], ['users' => User::all(), 'topics' => Topic::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            
            'anotacion' =>'required|max:500',
            'palabras_clave' =>'required|max:500',
            'resumen' =>'required|max:500',
            'user_id' =>'required|',
            'topic_id' =>'required|',
            
        ]);
        $nota = Note::find($id);
        $nota->anotaciones = $request->input('anotacion');
        $nota->palabras_clave = $request->input('palabras_clave');
        $nota->resumen = $request->input('resumen');
        $nota->user_id = $request->input('user_id');
        $nota->topic_id = $request->input('topic_id');
        $nota->save();
        return view('note.index',['notas' => Note::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $nota = Note::find($id);
        $nota->delete();
        return view('note.index',['notas' => Note::all()]);
    }
}

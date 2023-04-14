<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('topic.index',['temas' => Topic::all()],['asignaturas' => Subject::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('topic.create', ['subject' => Subject::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            
            'tema' =>'required|max:255',
            'subject_id' =>'required|',
            
        ]);
        $tema = new Topic();
        $tema->tema = $request->input('tema');
        $tema->subject_id = $request->input('subject_id');
        $tema->save();
        return view('topic.index',['temas' => Topic::all()],['asignaturas' => Subject::all()]);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $topics = Topic::find($id);
        return view('topic.edit', ['tema' => $topics],['subject' => Subject::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            
            'tema' =>'required|max:255',
            'subject_id' =>'required|',
            
        ]);
        $tema = Topic::find($id);
        $tema->tema = $request->input('tema');
        $tema->subject_id = $request->input('subject_id');
        $tema->save();
        return view('topic.index',['temas' => Topic::all()],['asignaturas' => Subject::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}

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
        return view('topic.index');
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
        return view('topic.index');
    
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
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        //
    }
}

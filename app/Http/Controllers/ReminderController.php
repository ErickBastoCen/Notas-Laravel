<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use App\Models\Note;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('reminders.index',['recordatorios' => Reminder::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reminders.create', ['notes' => Note::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            
            'note_id' =>'required|',
            'fecha' =>'required|',
            'importancia' =>'required|',
            
        ]);
        $recor = new Reminder();
        $recor->note_id = $request->input('note_id');
        $recor->fecha = $request->input('fecha');
        $recor->importancia = $request->input('importancia');
        $recor->save();
        return view('reminders.index',['recordatorios' => Reminder::all()]);
    }
    /**
     * Display the specified resource.
     */

    public function show(Reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reminders = Reminder::find($id);
        return view('reminders.edit', ['recordatorios' => $reminders], ['notes' => Note::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            
            'note_id' =>'required|',
            'fecha' =>'required|',
            'importancia' =>'required|',
            
        ]);
        $recor = Reminder::find($id);;
        $recor->note_id = $request->input('note_id');
        $recor->fecha = $request->input('fecha');
        $recor->importancia = $request->input('importancia');
        $recor->save();
        return view('reminders.index',['recordatorios' => Reminder::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recor = Reminder::find($id);
        $recor->delete();
        return view('reminders.index',['recordatorios' => Reminder::all()]);
    }
}

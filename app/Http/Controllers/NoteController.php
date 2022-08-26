<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // Metodo per il testing;
        // dd(request('tag'));
        return view('notes/index', [
            // 'contents' => Note::all()
            'contents' => Note::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Note $note)
    {
        return view('notes/show', [
            'note' => $note
        ]);
    }
}

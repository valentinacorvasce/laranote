<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Note;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route per mostrare l'elenco intero delle note;
/* Route::get('/', function () {
    return view('notes', [
        'intestazione' => 'Le ultime note',
        'contents' => Note::all()
    ]);
}); */

// Rotta per elenco di tutte le note con Controller;
// Route::get('/', 'App\Http\Controllers\NoteController@index');

// Action Syntax;
Route::get('/', [NoteController::class, 'index']);

// Rotta per singola nota con Controller;
// Route::get('notes/{note}', 'App\Http\Controllers\NoteController@show');

// Action Syntax;
Route::get('notes/{note}', [NoteController::class, 'show']);


// Route per mostrare la singola nota senza il controllo del dato non esistente;
/* Route::get('notes/{id}', function ($id) {
    return view('note', [
        'note' => Note::find($id)
    ]);
}); */

// Route per mostrare la singola nota con il controllo del dato non esistente;
/* Route::get('notes/{id}', function ($id) {
    $note = Note::find($id);

    if ($note) {
        return view('note', [
            'note' => $note
        ]);
    } else {
        abort('404');
    }
});
 */

// Route per mostrare singola nota attraverso il Binding del Modello;
/* Route::get('notes/{note}', function (Note $note) {
    return view('note', [
        'note' => $note
    ]);
}); */


/* Route::get('/saluto', function () {
    return response("<h1>Guarda chi c'è!</h1>", 200)
        ->header('Content-Type', 'text/plain')
        ->header('chiave', 'custom message');
});

Route::get('articoli/{id}', function ($id) {
    // dump, die, debug method!!!;
    ddd($id);

    return response('Post ' . $id);
})
    ->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    ddd($request);
    return $request->nome . '' . $request->apiKey;
}); */

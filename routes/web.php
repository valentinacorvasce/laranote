<?php

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
Route::get('/', function () {
    return view('notes', [
        'intestazione' => 'Le ultime note',
        'contents' => Note::all()
    ]);
});

// Route per mostrare la singola nota;
Route::get('notes/{id}', function ($id) {
    return view('note', [
        'note' => Note::find($id)
    ]);
});


Route::get('/saluto', function () {
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
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Il prefisso di default del percorso è: /api/;
Route::get('v1/prodotti', function () {
    return response()->json([
        'prodotto' => [
            'codice' => '12345',
            'descrizione' => 'Lorem Ipsum'
        ]
    ]);
});

<?php

namespace App\Models;

class Note
{
    // Funzione per richiamare tutte le note;
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Titolo strano 1',
                'description' => 'Lorem Ipsum'
            ],
            [
                'id' => 2,
                'title' => 'Titolo strano 2',
                'description' => 'Lorem Ipsum'
            ]
        ];
    }

    // Funzione per richiamare una singola nota;
    public static function find($id)
    {
        $notes = self::all();


        foreach ($notes as $note) {
            if ($note['id'] == $id) {
                // var_dump($note);
                return $note;
            };
        }
    }
}

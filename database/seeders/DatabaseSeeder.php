<?php

namespace Database\Seeders;

use App\Models\Note;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        \App\Models\Note::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* Note::create([
            'title' => 'Titolo 1',
            'author' => 'Gigi la Trottola',
            'email' => 'simo@aimo.it',
            'content' => 'lorem ipsum dolor sic amet'
        ]);

        Note::create([
            'title' => 'Titolo 2',
            'author' => 'Geronimo Stilton',
            'email' => 'gero@gero.it',
            'content' => 'meru cosu mit coket'
        ]); */
    }
}

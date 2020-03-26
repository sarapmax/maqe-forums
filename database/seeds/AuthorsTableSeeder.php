<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/authors.json");
        $data = json_decode($json);
        $authors = [];

        foreach ($data as $author) {
            $authors[] = [
                'name' => $author->name,
                'role' => $author->role,
                'place' => $author->place,
                'avatar_url' => $author->avatar_url
            ];
        }

        \App\Author::insert($authors);
    }
}

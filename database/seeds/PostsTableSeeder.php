<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/posts.json");
        $data = json_decode($json);
        $posts = [];

        foreach ($data as $post) {
            $posts[] = [
                'author_id' => $post->author_id,
                'title' => $post->title,
                'body' => $post->body,
                'image_url' => $post->image_url,
                'created_at' => $post->created_at
            ];
        }

        \App\Post::insert($posts);
    }
}

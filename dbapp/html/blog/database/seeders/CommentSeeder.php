<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function ($post){
            $user = DB::table('users')->inRandomOrder()->first();
            $comment = Comment::factory(rand(0,5))->create(['post_id' => $post->id,"user_id"=>$user->id])->first();
//            var_dump($comment);
            $comment->save();
        });
    }
}

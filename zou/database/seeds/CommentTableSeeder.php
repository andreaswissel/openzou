<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

		$newsId = DB::table('news')->first()->id;

        Comment::create(['content' => 'Testcomment 1', 'state' => 'angelegt', 'news_id' => $newsId]);
        $commentId = DB::table('comments')->first()->id;
		Comment::create(['content' => 'Testcomment 2', 'state' => 'angelegt', 'news_id' => $newsId, 'reply_to' => $commentId]);
    }
}

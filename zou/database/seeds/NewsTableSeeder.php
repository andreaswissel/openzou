<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();

        News::create(['title' => 'Testtitle 1', 'content' => 'Testcontent 1', 'state' => 'visible']);
    }

}

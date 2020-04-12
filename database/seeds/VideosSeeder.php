<?php

use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(['id' => 1, 'project_id' => 8, 'url' => 'https://www.youtube.com/embed/Wc0F5ksntDI']);
    }
}

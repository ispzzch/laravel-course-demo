<?php

use Illuminate\Database\Seeder;

use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Let's truncate our existing records to start from scratch.
       Post::truncate();

       $faker = \Faker\Factory::create();

       // And now, let's create a few articles in our database:
       for ($i = 0; $i < 5; $i++) {
           Post::create([
               'image' => 'https://www.twreporter.org/images/20190522180434-f698cb9480726fb6617a2de3a5dfc38c-tablet.JPG',
               'title' => $faker->sentence,
               'body' => $faker->paragraph,
               'user_id' => 1
           ]);
       }
    }
}

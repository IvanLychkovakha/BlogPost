<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
        Category::truncate();
        Post::truncate();*/
        
        $this->call([
            CategorySeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        User::factory()
            ->count(10)
            ->has(Post::factory()
                ->count(5)
                ->hasAttached(Category::inRandomOrder()->first())
            )
            ->create();
                

      //  DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}

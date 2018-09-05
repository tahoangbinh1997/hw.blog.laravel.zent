<?php

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
        // gọi tới file UserTableSeeder nếu bạn muốn chạy users seed
        // $this->call(UsersTableSeeder::class);
        // gọi tới file PostsTableSeeder nếu bạn muốn chạy posts seed
        $this->call(PostsTableSeeder::class); 
         // gọi tới file CategoriesTableSeeder nếu bạn muốn chạy categories seed
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}

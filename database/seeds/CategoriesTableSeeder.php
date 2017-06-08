<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categories')->truncate();

        $date = Carbon::now();

        DB::table('categories')->insert([
        	[
        		'title' => 'Web Design',
        		'slug' => 'web-design',
        		'created_at' => $date,
        		'updated_at' => $date
        	],
        	[
        		'title' => 'Web Programming',
        		'slug' => 'web-programming',
        		'created_at' => $date,
        		'updated_at' => $date
        	],
        	[
        		'title' => 'Internet',
        		'slug' => 'internet',
        		'created_at' => $date,
        		'updated_at' => $date
        	],
        	[
        		'title' => 'Social Marketing',
        		'slug' => 'social-arketing',
        		'created_at' => $date,
        		'updated_at' => $date
        	],
        	[
        		'title' => 'Photography',
        		'slug' => 'photography',
        		'created_at' => $date,
        		'updated_at' => $date
        	]
        ]);

        for($post_id = 1; $post_id <= 20; $post_id++)
        {
        	$category_id = rand(1,5);

        	DB::table('posts')
        		->where('id', $post_id)
        		->update(['category_id' => $category_id]);
        }
    }
}

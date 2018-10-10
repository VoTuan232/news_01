<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::whereNotNull('parent_id')->get();

        $posts = Post::all();

        foreach($posts as $post)
        {
            $category = $categories->random();
            $parentCategory = Category::where('id', '=', $category->parent_id)->first();
            $data = [
                [
                    'post_id' => $post->id,
                    'category_id' => $category->id,
                ],
                [
                    'post_id' => $post->id,
                    'category_id' => $parentCategory->id,
                ],
            ];
            DB::table('category_post')->insert($data);
        }
    }
}

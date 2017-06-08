<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    protected $limit = 3;

    public function index()
    {
      $posts = Post::with('author')->latestFirst()->published()->simplePaginate($this->limit);

      $categories = Category::with(['posts' => function($query){
        $query->published();
      }])->orderBy('title', 'asc')->get();
      return view("blog.index", compact("posts", "categories"));
    }

    public function show(Post $post)
    {
      return view("blog.show", compact("post"));
    }

    public function category($id)
    {
      $posts = Post::with('author')
                    ->latestFirst()
                    ->published()
                    ->where('category_id', $id)
                    ->simplePaginate($this->limit);

      $categories = Category::with(['posts' => function($query){
        $query->published();
      }])->orderBy('title', 'asc')->get();
      return view("blog.index", compact("posts", "categories"));
    }
}

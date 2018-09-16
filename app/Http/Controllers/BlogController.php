<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index() {
    	// $posts = Post::select('posts.*', 'categories.slug as category_slug')->join('categories', 'categories.id', '=', 'posts.category_id')->get(); // lấy tất cả bài viết bằng câu lệnh hàm all()
        $posts = Post::simplePaginate(4);

    	return view('index',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }

    public function detail($slug) {
    	$post = Post::where('slug', $slug)->firstOrFail(); // lấy tất cả bài viết bằng câu lệnh hàm all()

    	return view('detail',[
    		'post' => $post // dữ liệu được truyền qua view bằng biến posts
    	]);
    }

    public function category($slug) {
    	$category = Post::where('slug', $slug)->firstOrFail();

    	$posts = Post::where('category_id',$category->id)->get();

    	return view('categories.index',[
    		'posts' => $posts
    	]);
    }
}

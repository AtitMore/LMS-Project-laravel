<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\User\Post;
use App\Model\User\Category;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function post(Post $post)
    {
    	$posts = Post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
        $category_post = Category::all()->sortBy('name')->values();
        $category_latest_post = Post::where('status',1)->orderBy('created_at', 'DESC')->take(10)->get();
    	return view('user.blog.post', compact('post','posts','category_post','category_latest_post'));
    } 


    public function sidebar_category()
    {
    	$category_post = Category::all()->sortBy('name')->values();
		//$posts = $category->posts();
		return view('user.blog.post', compact('category_post'));
    }

}

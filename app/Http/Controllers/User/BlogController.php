<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\User\Category;
use App\Model\User\Post;
use App\Model\User\Tag;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
	public function index()
	{
			$posts = Post::where('status',1)->orderBy('created_at','DESC')->paginate(10);
			return view('user.blog.index', compact('posts'));
	}


	public function tag(Tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog.index',compact('posts'));
    }
    
    public function category(Category $category)
    {
        $posts = $category->posts();
        return view('user.blog.index',compact('posts'));
    }
}
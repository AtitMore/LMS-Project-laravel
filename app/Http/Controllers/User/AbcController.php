<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Post;


class AbcController extends Controller
{
	public function index()
	{
		$latestposts  = Post::orderBy('created_at', 'desc')->take(1)->get();
		$skipPost = Post::where('status',1)->orderBy('created_at', 'desc')->take(4)->skip(1)->get();
		$allPosts = Post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
		return view('user.abc',compact('latestposts', 'skipPost', 'allPosts'));
	}
}
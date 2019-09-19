<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Category;

class CategoryController extends Controller
{

	/*public function tags()
    {
    	return $this->belongsToMany('App\Model\User\Tag','post_tags')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Model\User\Category','category_posts')->withTimestamps();;
    }*/


	public function index()
	{
		$categories = Category::all()->sortBy('name');
		//$posts = $category->posts();
		return view('user.category.index', compact('categories'));
	}
	    
}

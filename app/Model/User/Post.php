<?php

namespace App\Model\User;
//use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Model\User\Tag','post_tags')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Model\User\Category','category_posts')->withTimestamps();;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
        return $this->hasMany('App\Model\User\Comment');
    }

    /*
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getSlugAttribute($value)
    {
        return route('post',$value);
    }*/

}

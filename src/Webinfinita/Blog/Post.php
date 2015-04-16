<?php namespace Webinfinita\Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {

    protected $fillable =['title', 'subtitle', 'body', 'published_at'];

    protected $dates =['published_at'];

	public function setTitleAttribute($title)
	{
		$this->attributes['title'] = $title;
		$this->attributes['slug'] = Str::slug($title);
	}

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}

<?php namespace Webinfinita\Blog\Traits;

trait HasManyPosts {

    public function posts()
    {
        return $this->hasMany('Webinfinita\Blog\Post');
    }

}

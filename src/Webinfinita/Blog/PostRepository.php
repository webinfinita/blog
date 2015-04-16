<?php namespace Webinfinita\Blog;

use Illuminate\Support\Facades\Auth;

class PostRepository {

    public function getAll()
    {
        return Post::with('owner')->latest()->paginate(10);
    }

    public function save($data)
    {
        return Auth::user()->posts()->create($data);
    }

    public function findBySlug($slug)
    {
        return Post::whereSlug($slug)->firstOrFail();
    }

    public function findById($id)
    {
        return Post::findOrFail($id);
    }

    public function update($slug, $data)
    {
        $post = $this->findBySlug($slug);

        $post->update($data);

        return $post;
    }

    public function destroy($slug)
    {
        $post = $this->findBySlug($slug);

        return $post->delete();
    }

}
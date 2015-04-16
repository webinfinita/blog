<?php namespace Webinfinita\Blog;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyPostOwner {

    protected $postRepo;

    function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $post = $this->postRepo->findBySlug($request->segment(2));

        if ( Auth::user()->id === $post->user_id)
        {
            return $next($request);
        }

        return redirect()->route('blog.index')->with('message', 'Permissions denied');
    }

}

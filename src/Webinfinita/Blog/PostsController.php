<?php namespace Webinfinita\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;

class PostsController extends Controller {

    protected $postRepo;

    function __construct(PostRepository $postRepo)
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);

        $this->middleware('post.owner', ['only' => ['edit', 'update', 'destroy']]);

        $this->postRepo = $postRepo;
    }


    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->postRepo->getAll();

		return view('webinfinita/blog::posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('webinfinita/blog::posts.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return Response
     */
	public function store(PostRequest $request)
	{
        $post = $this->postRepo->save($request->all());

        return redirect()->route('blog.index')->withMessage("{$post->title} was created");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function show($slug)
	{
        $post = $this->postRepo->findBySlug($slug);

		return view('webinfinita/blog::posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
        $post = $this->postRepo->findBySlug($slug);

		return view('webinfinita/blog::posts.edit', compact('post'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $slug
     * @param PostRequest $request
     * @return Response
     */
	public function update($slug, PostRequest $request)
	{
        $post = $this->postRepo->update($slug, $request->all());

        return redirect("blog/{$post->slug}/edit")->withMessage('The Post was updated');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
        $this->postRepo->destroy($slug);

        return redirect()->route('blog.index')->withMessage('Post was deleted');
	}

}

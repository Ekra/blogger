<?php

class BlogController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		$posts = DB::table('posts')->paginate(2);

		return View::make('posts.index',['posts' => $posts]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post;
		$post->title = Input::get('title');
		$post->blog = Input::get('blog');
		$post->save();	

		return Redirect::route('posts.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($title)
	{
		$post = Post::whereTitle($title)->first();

		return View::make('posts.show', ['post'=>$post]);	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function search()

    {
        $search= Input::get('search');

        $posts = Post::where('title', 'LIKE', '%'.$search.'%')->paginate(5);

         return View::make("posts.index",compact('posts'));
	}


}

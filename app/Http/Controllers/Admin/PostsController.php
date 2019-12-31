<?php

namespace App\Http\Controllers\Admin;

use  App\Http\Requests\PostFormRequest;
use  App\Http\Requests\PostEditFormRequest;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('backend.posts.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post = new Post;
        $categories = Category::pluck('name', 'id');
        return view('backend.posts.create')->with([
            'post' => $post,
            'categories' =>$categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        //
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => Str::slug($request->get('title'), '-'),
            'user_id' => 1
        ]);
        $post->save();
        $post->categories()->sync($request->get('categories'));

        return redirect('admin/posts/create')->with('status', 'A new post has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $selectedCategories = $post->categories()->pluck('name');
        //return $selectedCategories;

        return view('backend.posts.show')->with([
            'selectedCategories' => $selectedCategories,
            'post' => $post
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $selectedCategories = $post->categories()->pluck('id');
        $categories = Category::pluck('name', 'id');
        //return $category;


        return view('backend.posts.edit')->with([
            'post' => $post,
            'categories' =>$categories,
            'selectedCategories' => $selectedCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostEditFormRequest  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostEditFormRequest $request, Post $post)
    {
        //
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->slug = Str::slug($request->get('content'));
        $post->user_id = 1;
        $post->save();
        $post->categories()->sync($request->get('categories'));

        return redirect( action('Admin\PostsController@edit', $post))->with('status', 'A new post has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

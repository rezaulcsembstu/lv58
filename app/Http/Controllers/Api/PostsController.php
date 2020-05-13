<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

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
        $posts = Post::paginate(10);
        return response()->json($posts, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!$request->title || !$request->content) {
            return response()->json([
                'error'=> [
                    'message' => 'PLease enter all required fields.'
                ]
            ], 224);
        }

        $post = new Post([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title, '-'),
            'user_id' => 1
        ]);
        $post->save();

        return response()->json([
            'message' => 'The post has been saved successfully.',
            'data' => $post
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);

        if ($post) {
            return response()->json($post, 200);
        } else {
            return response()->json([
                'error' => [
                    'message' => 'This post can not found.'
                ]
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if (!$request->title || !$request->content) {
            return response()->json([
                'error' => [
                    'message' => 'PLease enter all required fields.'
                ]
            ], 224);
        }

        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = Str::slug($request->title, '-');
        $post->user_id = 1;
        $post->save();

        return response()->json([
            'message' => 'The post has been updated successfully.',
            'data' => $post
        ], 201);
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
        $post = Post::find($id);
        if ($post) {
            Post::destroy($id);
            return response()->json([
                'message' => 'The post has been deleted!'
            ], 200);
        } else {
            return response()->json([
                'error' => [
                    'message' => 'The post cannot be found.'
                ]
            ], 200);
        }

    }
}

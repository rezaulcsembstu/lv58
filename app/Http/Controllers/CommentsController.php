<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function newComment(CommentFormRequest $request)
    {
        //return $request->all();
        $comment = new Comment([
            'post_id' => $request->get('post_id'),
            'post_type' => $request->get('post_type'),
            'content' => $request->get('content'),
            'user_id' => 1
        ]);

        $comment->save();

        return redirect()->back()->with('status', 'Your comment has been created');
    }
}

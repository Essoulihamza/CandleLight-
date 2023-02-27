<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Resources\CommentResource;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    public function showPostComments(Post $post)
    {
        return CommentResource::collection(Comment::where('post_id', $post->id)->get());
    }

    public function store(StoreCommentRequest $request ,Post $post)
    {
        $request->validated($request->all());
        $comment = Comment::create([
             'content' => $request->content,
             'user_id' => Auth::user()->id,
             'post_id' => $post->id
        ]);
        return new CommentResource($comment);
    }

    public function edit(Comment $comment)
    {
        return $this->isNotAuthorized($comment) ? $this->isNotAuthorized($comment) : new CommentResource($comment);
    }

    public function update(Request $request,Comment $comment)
    {
        $this->isNotAuthorized($comment);
        $comment->update($request->all());
        return new CommentResource($comment);
    }

    public function destroy(Comment $comment)
    {
        $this->isNotAuthorized($comment) ? $this->isNotAuthorized($comment) : $comment->delete();
    }

    private function isNotAuthorized($comment) {
        if(Auth::user()->id !== $comment->user_id) {
            return $this->error('', 'You are not authorized to make this request', 403);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LikesResource;
use App\Http\Requests\StoreLikeRequest;

class LikeController extends Controller
{
    public function showPostLikes(Post $post)
    {
        return LikesResource::collection(Like::where('post_id', $post->id)->get());
    }
    public function showCommentLikes(Comment $comment)
    {
        return LikesResource::collection(Like::where('comment_id', $comment->id)->get());
    }

    public function store(Post $post)
    {
        $like = Like::create([
             'user_id' => Auth::user()->id,
             'post_id' => $post->id
        ]);
        return new LikesResource($like);
    }
    public function storeCommentLike(Comment $comment) 
    {
        $like = Like::create([
            'user_id' => Auth::user()->id,
            'post_id' => null,
            'comment_id' => $comment->id
       ]);
       return new LikesResource($like);
    }

    public function destroy(Post $post)
    {
        $like = Like::where('post_id' , $post->id)
            	    ->where('user_id', Auth::user()->id);
        $like->delete();
    }
}

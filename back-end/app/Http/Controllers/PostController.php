<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PostsResource;
use App\Http\Requests\StorePostRequest;
use App\Models\Comment;

class PostController extends Controller
{
    use HttpResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostsResource::collection(Post::all());
        // return Post::with('comment')->all();
    }

    public function showMine()
    {
        return PostsResource::collection(
            Post::where('user_id', Auth::user()->id)->get()
        );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validated($request->all());

        $img = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(dirname(base_path()) . '\front-end\src\assets\images\Posts', $img);

        // insert
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $img
        ]);

        return new PostsResource($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostsResource($post);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->isNotAuthorized($post);
        $post->update($request->all());
        return new PostsResource($post);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return $this->isNotAuthorized($post) ? $this->isNotAuthorized($post) : $post->delete();
    }
    private function isNotAuthorized($post) {
        if(Auth::user()->id !== $post->user_id) {
            return $this->error('', 'You are not authorized to make this request', 403);
        }
    }
}

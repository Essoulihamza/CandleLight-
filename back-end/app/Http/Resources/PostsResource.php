<?php

namespace App\Http\Resources;

use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $categories = [];
        foreach ($this->categories as $category) {
            array_push($categories, $category->name);           
        }
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'title' => $this->title,
                'content' => $this->content,
                'image' => $this->image,
                'likes_count' => count($this->like),
                'Comment_count' => count($this->comment),
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'relationships' => [
                'user id' => (string)$this->user->id,
                'user name' => $this->user->user_name,
                'user image' => $this->user->image,
                'categories' => $categories
            ]
        ];
    }
}

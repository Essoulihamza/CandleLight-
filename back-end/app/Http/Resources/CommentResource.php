<?php

namespace App\Http\Resources;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'content' => $this->content,
                'created_at' => $this->created_at,
                'likes_count' =>  Like::where('comment_id', $this->id)
                                        ->where('post_id', $this->post_id)
                                        ->count(),
            ],
            'relationships' => [
                'post id' => $this->post_id,
                'user name' => $this->user->user_name,
                'user image' => $this->user->image,
            ]
        ];
    }
}

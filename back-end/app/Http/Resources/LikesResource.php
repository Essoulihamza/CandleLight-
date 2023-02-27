<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LikesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if($this->post_id != null) {
            return [
                'id' => (string)$this->id,
                'attributes' => [
                    "created_at" => $this->created_at,
                    "for" => 'post'
                ],
                'relationships' => [
                    'post id' => $this->post_id,
                    'user name' => $this->user->user_name,
                    'user image' => $this->user->image,
                ]
            ];
        }
        return [
            'id' => (string)$this->id,
            'attributes' => [
                "created_at" => $this->created_at,
                "for" => 'comment'
            ],
            'relationships' => [
                'comment id' => $this->comment_id,
                'user name' => $this->user->user_name,
                'user image' => $this->user->image,
            ]
        ];
    }
}

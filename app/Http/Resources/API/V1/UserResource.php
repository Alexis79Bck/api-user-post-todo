<?php

namespace App\Http\Resources\API\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            
            "type" => "user",
            "id" => (string) $this->id,
            "name" => $this->name,
            "username" => $this->username,
            "relationship" => [
                "profile" => $this->profile->makeHidden(['created_at', 'updated_at']),
                "posts" => $this->posts
            ]
            
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class usersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_name' => $this->user_name,
            'user_password' => $this->user_password,
            'user_role' => $this->user_role,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Todo extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toJson($request)
    {
      return [
            'id' => $this->id,
            'name' => $this->name,
            'is_completed' => $this->is_completed,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
      ];
    }
}

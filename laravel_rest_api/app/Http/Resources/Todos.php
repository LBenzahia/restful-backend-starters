<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Todos extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toJson($request)
    {
        return parent::toJson($request);
    }
}

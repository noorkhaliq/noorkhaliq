<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'category_id' => $this->category_id,
            'title' => $this->title,
            'location' => $this->location,
            'area' => $this->area,
            'image' => $this->image ? asset('uploads/'.$this->image) : '',

        ];
    }
}

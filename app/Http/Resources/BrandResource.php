<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
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
            'type' => 'Brand',
            'attributes' => [
                'name' => $this->name,
                'slug' => $this->slug,
                'category_id'=>$this->category_id,
                'delivery_id'=>$this->delivery_id,
                'image'=>$this->image,
           
            ]

        ];
    
    }
}

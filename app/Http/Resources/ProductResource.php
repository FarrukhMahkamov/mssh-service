<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => (string)$this->id,
            'type' => 'Products',
            'attributes' => [
                'name' => $this->name,
                'slug' => $this->slug,
                'brand_id' => $this->brand_id,
                'size_id' => $this->size_id,
                'block_count' => $this->block_count,
                'first_price' => $this->first_price,
                'second_price' => $this->second_price,
            ]
        ];
    }
}
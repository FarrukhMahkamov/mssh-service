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
           
            ]

        ];
        // $table->string('name');
        // $table->string('slug');
        // $table->foreignId('category_id');
        // $table->foreignId('delivery_id');
        // $table->text('image');
        // $table->timestamps();
    }
}

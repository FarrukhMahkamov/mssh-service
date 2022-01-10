<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
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
            'type' => 'Delivery',
            'attributes' => [
                'username' => $this->username,
                'username_slug' => $this->username_slug,
                'boss_name' => $this->boss_name,
                'boss_name_slug' => $this->boss_name_slug,
                'boss_phone_number' => $this->boss_phone_number,
            ]
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {   
        return [
            'identify' => $this->id,
            'zipcode' => $this->zipcode,
            'street' => $this->street,
            'complement' => $this->completement,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state
        ];
        
    }
}

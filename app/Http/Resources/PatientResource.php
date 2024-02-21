<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'full_name_mother' => $this->full_name_mother,
            'date_of_birth' => $this->date_of_birth,
            'document_cpf' => $this->document_cpf,
            'document_cns' => $this->document_cns
        ];
    }
}

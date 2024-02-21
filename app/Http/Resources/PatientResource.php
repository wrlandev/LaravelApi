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
            'identify' => $this->id,
            'full name' => $this->full_name,
            'mother full name' => $this->full_name_mother,
            'date of birth' => $this->date,
            'document cpf' => $this->document_cpf,
            'document cns' => $this->document_cns
        ];
    }
}

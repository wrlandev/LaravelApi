<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePatient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [

            'full_name' => 
            [
                'required',
                'string',
                'min:3',
                'max:33'
            ],

            'full_name_mother' => 
            [
                'required',
                'string',
                'min:3',
                'max:33'
            ],

            'date_of_birth' =>
            [
                'required'
            ],

            'document_cpf' =>
            [
                'required'
            ],

            'document_cns' => 
            [
                'required'
            ]
        ];

        if($this->method() === 'PATCH') {

            $rules = 
            [
                'full_name' => 
                [
                'required',
                'string',
                'min:3',
                'max:33'
                ],

            'full_name_mother' => 
                [
                'required',
                'string',
                'min:3',
                'max:33'
                ],
            ];
        }

        return $rules;
    }
}

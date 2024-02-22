<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAddress extends FormRequest
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
        $rules = 
        [
            'zipcode' => 
            [
                'required',
                'unique:addresses',
                'formato_cep'
            ],

            'street' => 
            [
                'required',
                'min:3',
                'max:33'
            ],

            'complement' => 
            [
                'required',
                'min:3',
                'max:66'
            ],

            'neighborhood' => 
            [
                'required',
                'min:3',
                'max:33'
            ],

            'city' => 
            [
                'required',
                'min:3',
                'max:33'
            ],

            'state' => 
            [
                'required',
                'uf'
            ],
        ];

        if($this->method() === 'PATCH') {

            $rules = 
            [
                'zipcode' => 
                [
                    'required',
                    'unique:addresses',
                    'formato_cep'
                ],

                'street' => 
                [
                    'required',
                    'min:3',
                    'max:33'
                ],

                'complement' => 
                [
                    'required',
                    'min:3',
                    'max:66'
                ],

                'neighborhood' => 
                [
                   'required',
                   'min:3',
                   'max:33'
                 ],

                'city' => 
                [
                    'required',
                    'min:3',
                    'max:33'
                ],

                'state' => 
                [
                    'required',
                    'uf'
                ]

            ];
        }

        return $rules;
    }
}

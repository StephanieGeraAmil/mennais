<?php

namespace App\Http\Requests;

use App\Enums\InscriptionTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class SimpleInscriptionRequest extends FormRequest
{
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            // 'lastname' => 'required|string|max:255',
            'document' => 'required|string|max:255|unique:user_data',
            'email' => 'required|email',
            'payment_file'=>'required|file|mimes:jpg,png,jpeg,gif,svg,pdf',
            'extra' => 'array', 
            'extra.place' => [ 
                Rule::in(['montevideo', 'interior'])
            ],
            'city'=>'string|max:255',
            'amount'=>'nullable|numeric',
            'institution_name'=>'string|max:255',
            'institution_type'=>'string|max:255',
            'type' =>  new Enum(InscriptionTypeEnum::class)
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'El campo nombre es obligatorio.',
        'document.required' => 'El campo documento es obligatorio.',
        'email.required' => 'El campo correo electrónico es obligatorio.',
        'email.email' => 'El formato del correo electrónico no es válido.',
        'city.required' => 'El campo ciudad es obligatorio.',
        'city.string' => 'La ciudad debe ser una cadena de texto.',
        'institution_name.required' => 'El nombre de la institución  es obligatorio.',
        'institution_name.string' =>  'El nombre de la institución  es obligatorio.',
          'payment_file.required' => 'El archivo de pago debe ser un archivo válido.',
        'payment_file.file' => 'El archivo de pago debe ser un archivo válido.',
        'amount.numeric' => 'El monto debe ser un número.',
          'institution_type.required' => 'El campo nivel es obligatorio.',
        'institution_type.string' => 'El campo nivel es obligatorio.',
    ];
}
    
    public function prepareForValidation()
    {
        $this->merge([
            'document' => str_replace([',','-','.',' '], '',$this->document),
        ]);
    }
    
    
}

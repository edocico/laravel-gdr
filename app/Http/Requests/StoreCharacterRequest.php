<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
        return [
            'name'=>['required','max:255','min:3'],

            'bio'=>['min:50','nullable'],
            'speed'=>['required','min:1','max:100','numeric'],
            'defense'=>['required','min:1','max:100','numeric'] ,
            'hp'=>['required','min:100','max:1000','numeric'] ,
            'type_id'=>['required','exists:types,id'],
            'items' => 'exists:items,id'
        ];
    }
}

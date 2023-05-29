<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'max:50|required',
            'model' => 'max:50|required',
            'price' => 'numeric|decimal:0,2|required',
            'cc' => 'required|numeric',
            'year_release' => 'required|date',
            'optionals' => 'exists:optionals,id'
        ];
    }
}

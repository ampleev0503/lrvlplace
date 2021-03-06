<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|not_regex:/[0-9]/|unique:places,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Не забывайте ввести название места',
            'name.unique' => 'Место с таким именем уже существует',
            'name.not_regex' => 'Название места не должно содерать цифр'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|string|between:5,150|unique:projects,name',
            'description' => 'required|string',
            'client' => 'required|string|between:5,150',
            'cover_image'=> 'nullable|image|max:2048',
            'type_id'=> 'nullable|exists:types,id',
            'tecnologies'=> 'nullable|exists:tecnologies,id'
        ];
    }
}

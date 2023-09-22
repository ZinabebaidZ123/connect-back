<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif|max:2048' ,
            'name' => 'required|min:3|max:200' ,
            'description' =>'required|min:10 |max:600' ,
            'service_id' => 'required|exists:services, id' ,
        ];
    }
}

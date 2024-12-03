<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formgetrequest extends FormRequest
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
            //
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirmpassword' => 'required',
            'image' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ];
    }
}

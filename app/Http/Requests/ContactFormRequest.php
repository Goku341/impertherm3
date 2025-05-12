<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize() { return true; }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required',
            'message'    => 'required|string',
            'images'   => 'nullable|array|max:5',
            'images.*' => 'image|max:2048',
        ];
    }
}


<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users|email',
            'address' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'password' => 'required|max:255|min:8|confirmed',
        ];
    }
}


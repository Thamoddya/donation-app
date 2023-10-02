<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class IndexUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }
    public function rules(): array
    {
        return [
            'username'=>'required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                "name" =>"required|string|min:3" ,
                "email" =>"required|email|unique:admins,email" ,
                "password" =>"required|min:6|same:confirm" ,
                "phone" =>"required|numeric|digits:11|starts_with:011,010,012,015" ,
                "role" =>"required|in:Admin, Super Admin ,Moderator" ,
                "img" =>"required|image" 
        ];
    }
}

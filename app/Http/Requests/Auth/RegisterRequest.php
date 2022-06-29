<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Traits\UserTrait;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    use UserTrait;

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = $this->getRules();
        array_push($rules['email'], Rule::unique('users'));
        return $rules;
    }
}

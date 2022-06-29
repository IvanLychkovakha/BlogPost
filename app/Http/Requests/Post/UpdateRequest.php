<?php

namespace App\Http\Requests\Post;

use App\Http\Requests\Traits\PostTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    use PostTrait;

    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        $rules = $this->getRules();


        array_unshift($rules['title'], 'nullable');
        array_unshift($rules['images'], 'nullable');
        array_unshift($rules['categories'], 'nullable');
        array_unshift($rules['content'], 'nullable');
        return $rules;

    }
}
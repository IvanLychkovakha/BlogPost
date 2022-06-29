<?php

namespace App\Http\Requests\Post;

use App\Http\Requests\Traits\PostTrait;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    use PostTrait;

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $rules = $this->getRules();

        array_unshift($rules['title'], 'required');
        array_unshift($rules['images'], 'required');
        array_unshift($rules['content'], 'required');
        array_unshift($rules['categories'], 'required');

        return $rules;
    }
}
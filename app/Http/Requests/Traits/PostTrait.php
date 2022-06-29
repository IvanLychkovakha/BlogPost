<?php

namespace App\Http\Requests\Traits;

trait PostTrait
{
    protected function getRules()
    {
        return [
            'title' => ['string','between:4,32'],
            'images' => [],
            'categories' => [],
            'content' => ['string', 'max:1000']
        ];
    }

}

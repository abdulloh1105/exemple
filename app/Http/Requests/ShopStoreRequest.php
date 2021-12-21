<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:shops,name',
            'description' => 'sometimes'
        ];
    }
}

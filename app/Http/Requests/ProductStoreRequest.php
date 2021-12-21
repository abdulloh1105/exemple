<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'price' => 'required',
            'shop_id' => 'required',
            'description' => 'sometimes'
        ];
    }
}

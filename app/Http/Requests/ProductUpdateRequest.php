<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|unique:products,name'.$this->id,
            'price' => 'required',
            'shop_id' => 'required',
            'description' => 'sometimes'
        ];
    }
}

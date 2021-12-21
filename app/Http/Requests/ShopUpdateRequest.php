<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:shops,name'.$this->id,
            'description' => 'sometimes'
        ];
    }
}

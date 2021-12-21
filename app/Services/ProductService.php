<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function add($params){
        return Product::create([
            'name' => $params['name'],
            'price' => $params['price'],
            'shop_id' => $params['shop_id'],
            'description' => $params['description'],
            'status' => $params['status'],
        ]);
    }
    public function edit($params){
        return Product::update([
            'name' => $params['name'],
            'price' => $params['price'],
            'shop_id' => $params['shop_id'],
            'description' => $params['description'],
            'status' => $params['status'],
        ]);
    }
}

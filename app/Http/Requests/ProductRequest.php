<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules(Request $request)
    {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'categorie_id' => 'required',
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:products,purl' . $item_id,
            'price' => 'required|numeric',
            'article' => 'required',
            'image' => 'image'
        ];
    }
}

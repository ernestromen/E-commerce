<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules(Request $request)
    {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/i|unique:categories,curl' . $item_id,
            'article' => 'required',
            'image' => 'image'
        ];
    }
}

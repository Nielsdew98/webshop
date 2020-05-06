<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title'=>'required|string',
            'short_description'=>'required|string|max:255',
            'description'=>'required|string',
            'categories'=>'required',
            'is_active'=>'required',
            'price'=>'required',
            'main_image'=>'required|file',
            'stock'=>'required',

        ];
    }
    public function messages(){
        return[
            'title.required' => 'Name is required',
            'short_description.required' => 'Short description is required',
            'description.required' => 'Description is required',
            'categories.required' => 'Selecting Categories is required',
            'is_active.required' => 'Selecting wether the prduct is active or not is required',
            'price.required' => 'Price is required',
            'main_image.required' => 'Main image is required',
            'stock.required' => 'A stock is required',
        ];
    }
}

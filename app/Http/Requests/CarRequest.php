<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CarRequest extends FormRequest
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
            'mark'=>'required|min:2',
            'model'=>'required|min:2',
            'year'=>'required',
            'max_speed'=>'numeric|min:20|max:300',
            "is_automatic"=>'required',
            'engine'=>'required',
            'number_of_doors'=>'required|numeric|between:2,5',
        ];
    }
}

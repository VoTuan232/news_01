<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class TagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules($request)
    {
        $messages = [
            'name.required' => trans('language.required-name-tag'),
            'name.min' => trans('language.required-min-tag'),
            'name.unique' => trans('language.required-unique-tag'),
        ];

        return  Validator::make($request->all(), [
                'name' => 'required|min:3|unique:tags,name',
            ], $messages
        );
    }
}

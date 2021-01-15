<?php

namespace App\Http\Requests\Advertisement;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'title' => 'required',
            'url' => 'required',
            'content' => 'image|nullable|max:1999',
            'published_at' => 'nullable|date_format:Y-m-d H:i:s',
            'ended_at' => 'nullable|date_format:Y-m-d H:i:s',
        ];
    }
}

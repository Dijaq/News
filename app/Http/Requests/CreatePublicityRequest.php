<?php

namespace radioyaravi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePublicityRequest extends FormRequest
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
            'nombre' => 'required',
            'url_publicidad' => 'required',
            'dir_image' => 'required'
        ];
    }
}

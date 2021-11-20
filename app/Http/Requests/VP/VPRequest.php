<?php

namespace App\Http\Requests\VP;

use Illuminate\Foundation\Http\FormRequest;

class VPRequest extends FormRequest
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
            'catatan_vp' => 'required|string|',
        ];
    }
}

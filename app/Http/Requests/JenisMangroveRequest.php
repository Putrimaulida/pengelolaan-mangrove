<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisMangroveRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_keluarga' => 'required|string|max:255',
            'nama_ilmiah' => 'required|string|max:255',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'email' => 'required',
            'pesan' => 'required|max:255'
        ];
    }

    public function messages()
{
    return [
        'email.required' => 'Email harus di isi',
        'pesan.max'  => 'Karakter maksimum 255',
        'pesan.required' => 'Pesan harus di isi'
    ];
}
}

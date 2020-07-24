<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KelolaMadingRequest extends FormRequest
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

    //  kualifikasi data dan kuantitasnya
    public function rules()
    {
        return [
            'gambar' => 'image',
            'kelola_kategori_id' => 'required|integer|exists:kelola_kategoris,id'
        ];
    }
}

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
            'deskripsi' => 'required|max:255',
            'kelola_kategori_id' => 'nullable|integer|exists:kelola_kategoris,id',
            'kelola_kategori_kategori' => 'max:255|exists:kelola_kategoris,kategori',
            'users_id' => 'required|integer|exists:users,id'
        ];
    }
}

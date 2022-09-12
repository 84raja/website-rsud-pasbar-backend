<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'telp' => 'required|numeric',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'foto_profil' => 'nullable|mimes:jpg,jpeg,png',
            'logo' => 'nullable',
            'struktur_organisasi' => 'nullable'
        ];
    }


    public function messages() //OPTIONAL
    {
        return [
            // 'name.required' => 'Nama Harus Diisi',
            // 'email.email' => 'Email is not correct'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'foto_profil' => 'nullable|mimes:jpg,jpeg,png',
            'no_hp' => 'required|numeric|digits_between:11,13',
            'group' => 'required',
            'email' => 'required|email',
            'polyclinic_id' => 'required|numeric'
        ];
    }
}

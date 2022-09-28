<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleStoreRequest extends FormRequest
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
            'dokter' => 'required',
            'senin_mulai' => 'required|date_format:H:i',
            'senin_selesai' => 'required|date_format:H:i',
            'selasa_mulai' => 'required|date_format:H:i',
            'selasa_selesai' => 'required|date_format:H:i',
            'rabu_mulai' => 'required|date_format:H:i',
            'rabu_selesai' => 'required|date_format:H:i',
            'kamis_mulai' => 'required|date_format:H:i',
            'kamis_selesai' => 'required|date_format:H:i',
            'jumat_mulai' => 'required|date_format:H:i',
            'jumat_selesai' => 'required|date_format:H:i',
            'sabtu_mulai' => 'required|date_format:H:i',
            'sabtu_selesai' => 'required|date_format:H:i',
        ];
    }
}

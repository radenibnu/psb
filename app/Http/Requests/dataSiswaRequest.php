<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dataSiswaRequest extends FormRequest
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
            'nik' => 'required|string',
            'nama' => 'required|string',
            'ttl' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'asal_tk' => 'required|string',
            'tanggal_lulus' => 'required|string',
            'kk' => 'required|string',
            'kip' => 'required|string',
            'alamat' => 'required|string',
            'status' => 'required|string',
            'ayah' => 'required|string',
            'ayahttl' => 'required|string',
            'nikayah' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string',
            'penghasilan' => 'required|string',
            'nomorayah' => 'required|string'
        ];
    }
}

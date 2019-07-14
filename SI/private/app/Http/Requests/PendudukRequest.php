<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
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
            //
            'kk'    => 'required|numeric',
            'nik'  => 'required|numeric|min:16|',
            'nama'    => 'required|regex:/^[a-zA-Z ]+$/',
            'tempat_lahir'    => 'required',
            'tanggal_lahir'    => 'required',
            'jenis_kelamin'    => 'required',
            'alamat'    => 'required',
            'rt'    => 'required|numeric',
            'rw'    => 'required|numeric',
            'desa'    => 'required',
            'kecamatan'    => 'required', 
            'agama'    => 'required',  
            'status_perkawinan'    => 'required',  
            'pekerjaan'    => 'required', 
            'gol_darah'    => 'required',
            'warga_negara'    => 'required',
            
            
        ];
    }
}

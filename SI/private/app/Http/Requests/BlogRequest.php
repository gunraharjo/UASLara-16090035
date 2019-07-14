<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        if($this->method() == 'PATCH') {
            $gambar_rules= 'sometimes|nullable|image|max:3000|mimes:jpeg,jpg,bmp,png';
          }
          else {
            $gambar_rules= 'required|image|max:3000|mimes:jpeg,jpg,bmp,png';
          }
          return [
            'judul'=>'required',
            'isiberita'=>'required|',
            'foto'=>$gambar_rules
          ];
    }
}

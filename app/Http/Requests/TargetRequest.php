<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TargetRequest extends FormRequest
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
            'name' =>'required',
            'ranking' => 'required'
        ];
    }

    public function messages(){
      return[
        'name.required' => 'Name can not be empy',
        'ranking.required' => 'Ranking can not ve empy'
      ];
    }
}

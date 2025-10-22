<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class MassDestroySportTypeRequest extends FormRequest
{   
     public function authorize()
    {
        return Gate::allows('sport_type_delete');
    }

    public function rules()
    {
        return [
            'ids' => ['required', 'array'],
            'ids.*' => ['exists:sport_types,id'],
        ];
    }
}

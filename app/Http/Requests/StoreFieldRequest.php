<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
class StoreFieldRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Gate::allows('field_create');
    }

    public function rules()
    {
        return [
            'sport_type_id' => ['required', 'exists:sport_types,id'],
            'price_per_hours' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:available,unavailable'],
        ];
    }
}

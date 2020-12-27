<?php

namespace App\Http\Requests\Admin\Medicine;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateMedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'            => ['required', 'min:3', 'max:255', Rule::unique('medicines', 'name')->ignore($this->id)],
            'expire_date'     => ['required','date'],
            'quantity'        => ['required','numeric'],
            'alert_qty'       => ['required', 'numeric'],
            'price'           => ['required'],
            'status'          => ['required', 'in:0,1'],
            'description'     => [],
        ];
    }
}

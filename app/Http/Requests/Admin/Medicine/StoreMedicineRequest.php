<?php

namespace App\Http\Requests\Admin\Medicine;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreMedicineRequest extends FormRequest
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
            'name'            => ['required','unique:medicines,name', 'min:3', 'max:255'],
            'expire_date'     => ['required','date'],
            'quantity'        => ['required','numeric'],
            'alert_qty'       => ['required', 'numeric'],
            'price'           => ['required'],
            'status'          => ['required', 'in:0,1'],
            'description'     => [],
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\Stock;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateStockRequest extends FormRequest
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
            'name'          => ['required', 'min:3', 'max:255', Rule::unique('stocks', 'name')->ignore($this->id)],
            'serial_no'     => ['required', 'min:10', 'max:255', Rule::unique('stocks', 'serial_no')->ignore($this->id)],
            'quantity'      => ['required', 'integer'],
            'price'         => ['required'],
            'type'          => ['required', 'in:0,1'],
        ];
    }
}

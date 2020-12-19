<?php

namespace App\Http\Requests\Admin\Stock;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreStockRequest extends FormRequest
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
            'name'          => ['required', 'min:3', 'max:255', 'unique:stocks,name'],
            'serial_no'     => ['required', 'min:10', 'max:255', 'unique:stocks,serial_no'],
            'quantity'      => ['required', 'integer'],
            'price'         => ['required'],
            'type'          => ['required', 'in:0,1'],
        ];
    }
}

<?php

namespace App\Http\Requests\Admin\OrderStock;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreOrderStockRequest extends FormRequest
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
            'quantity'  => ['required', 'numeric'],
            'stock_id'  => ['required', 'numeric'],
            'type'      => ['required', 'in:0,1'],
            'action'    => ['required', 'in:0,1'],
        ];
    }
}

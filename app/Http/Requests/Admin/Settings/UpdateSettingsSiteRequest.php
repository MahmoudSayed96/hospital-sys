<?php

namespace App\Http\Requests\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSettingsSiteRequest extends FormRequest
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
            'site_name'  => ['required', 'min:3', 'max:50'],
            'site_logo'  => ['image', 'mimes:jpeg,jpg,png', 'max:2000'],
            'site_email' => ['email', 'max:100'],
            'status'     => ['required', 'in:1,0']
        ];
    }
}

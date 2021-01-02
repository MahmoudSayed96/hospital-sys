<?php

namespace App\Http\Requests\Admin\Doctor;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreDoctorRequest extends FormRequest
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
        return[
            'name'              => ['required', 'string', 'min:3', 'max:255'],
            'username'          => ['required', 'unique:users,username', 'min:3', 'max:20'],
            'email'             => ['required', 'string', 'email', 'max:150', 'unique:users,email'],
            'password'          => ['required', 'string', 'min:8', 'confirmed'],
            'avatar'            => ['image', 'mimes:jpeg,jpg,png', 'max:2000'], 
            'date_of_birth'     => ['required', 'date'],
            'phone'             => ['unique:users,phone'], 
            'governorate_id'    => ['required', 'numeric'], 
            'city_id'           => ['required', 'numeric'],
            'department_id'     => ['required', 'numeric'],
            'specialist_id'     => ['required', 'numeric'],
            'degree'            => ['required', 'max:255'], 
            'status'            => ['required', 'in:0,1'],
            'gender'            => ['required', 'in:0,1'], 
            'bio'               => [''], 
            'salary'            => ['']
        ];    
    }
}

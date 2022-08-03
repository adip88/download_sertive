<?php

namespace App\Http\Requests;

use App\Traits\UserLogTrait;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    use UserLogTrait;
    public function rules()
    {
        return [
            'name'          => 'required|max:255',
            'email'         => 'required|max:255|email|unique:users,email',
            'password'      => 'required|max:255',
            'address'       => 'required|max:255',
        ];
    }
}

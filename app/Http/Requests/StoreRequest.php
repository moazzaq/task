<?php

namespace App\Http\Requests;

use App\Rules\NewDomain;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required',
            'store_name' => 'required|unique:admins,store_name',
            'password' => 'required',
            'domain' => 'required',
            //'new_domain_detail' => 'required_if:domain,==,yes',
            'new_domain_detail' => [new NewDomain($this->domain)],
            'exists_domain_detail' => 'required_if:domain,==,no',
            'package' => 'required',
        ];
    }
}

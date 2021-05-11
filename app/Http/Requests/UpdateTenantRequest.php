<?php

namespace App\Http\Requests;

use App\Models\Tenant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTenantRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('tenant_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'middle_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'nullable',
            ],
            'gender' => [
                'required',
            ],
            'department' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'required',
                'unique:tenants,phone,' . request()->route('tenant')->id,
            ],
            'email' => [
                'required',
                'unique:tenants,email,' . request()->route('tenant')->id,
            ],
            'id_type' => [
                'required',
            ],
            'id_number' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:tenants,id_number,' . request()->route('tenant')->id,
            ],
            'home_address_line_1' => [
                'string',
                'nullable',
            ],
            'home_address_line_2' => [
                'string',
                'nullable',
            ],
            'emergency_person_name' => [
                'string',
                'required',
            ],
            'emergency_person_phone_number_1' => [
                'string',
                'required',
            ],
            'emergency_person_phone_number_2' => [
                'string',
                'nullable',
            ],
            'room_id' => [
                'required',
                'integer',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}

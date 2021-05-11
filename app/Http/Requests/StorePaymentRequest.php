<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_create');
    }

    public function rules()
    {
        return [
            'tenant_id' => [
                'required',
                'integer',
            ],
            'payment_method' => [
                'required',
            ],
            'total_amount' => [
                'required',
            ],
            'total_paid' => [
                'required',
            ],
            'transactionid' => [
                'string',
                'required',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Expense;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExpenseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('expense_create');
    }

    public function rules()
    {
        return [
            'expense_name' => [
                'string',
                'required',
            ],
            'category' => [
                'required',
            ],
            'payment_method' => [
                'required',
            ],
            'reference_number' => [
                'string',
                'required',
            ],
            'amount' => [
                'required',
            ],
        ];
    }
}

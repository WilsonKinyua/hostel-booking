<?php

namespace App\Http\Requests;

use App\Models\Notice;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNoticeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('notice_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
        ];
    }
}

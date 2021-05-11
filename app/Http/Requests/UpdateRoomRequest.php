<?php

namespace App\Http\Requests;

use App\Models\Room;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRoomRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('room_edit');
    }

    public function rules()
    {
        return [
            'number' => [
                'string',
                'required',
                'unique:rooms,number,' . request()->route('room')->id,
            ],
            'status' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'floor_id' => [
                'required',
                'integer',
            ],
            'rent' => [
                'required',
            ],
        ];
    }
}

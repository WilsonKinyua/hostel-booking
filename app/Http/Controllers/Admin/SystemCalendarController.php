<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\Complaint',
            'date_field' => 'created_at',
            'field'      => 'complaint_title',
            'prefix'     => 'Complain',
            'suffix'     => '',
            'route'      => 'admin.complaints.edit',
        ],
        [
            'model'      => '\App\Models\Expense',
            'date_field' => 'created_at',
            'field'      => 'id',
            'prefix'     => 'New Expense',
            'suffix'     => '',
            'route'      => 'admin.expenses.edit',
        ],
        [
            'model'      => '\App\Models\Payment',
            'date_field' => 'created_at',
            'field'      => 'id',
            'prefix'     => 'New Payment',
            'suffix'     => '',
            'route'      => 'admin.payments.edit',
        ],
    ];

    public function index()
    {
        $events = [];
        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . ' ' . $model->{$source['field']} . ' ' . $source['suffix']),
                    'start' => $crudFieldValue,
                    // 'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}

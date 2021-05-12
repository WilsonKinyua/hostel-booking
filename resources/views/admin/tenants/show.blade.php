@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.tenant.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.tenants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.id') }}
                        </th>
                        <td>
                            {{ $tenant->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.first_name') }}
                        </th>
                        <td>
                            {{ $tenant->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.middle_name') }}
                        </th>
                        <td>
                            {{ $tenant->middle_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.last_name') }}
                        </th>
                        <td>
                            {{ $tenant->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Tenant::GENDER_RADIO[$tenant->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.department') }}
                        </th>
                        <td>
                            {{ $tenant->department }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.phone') }}
                        </th>
                        <td>
                            {{ $tenant->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.email') }}
                        </th>
                        <td>
                            {{ $tenant->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.tenant_image') }}
                        </th>
                        <td>
                            @if($tenant->tenant_image)
                                <a href="{{ $tenant->tenant_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $tenant->tenant_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.id_type') }}
                        </th>
                        <td>
                            {{ App\Models\Tenant::ID_TYPE_SELECT[$tenant->id_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.id_number') }}
                        </th>
                        <td>
                            {{ $tenant->id_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.tenant_id_image') }}
                        </th>
                        <td>
                            @foreach($tenant->tenant_id_image as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.home_address_line_1') }}
                        </th>
                        <td>
                            {{ $tenant->home_address_line_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.home_address_line_2') }}
                        </th>
                        <td>
                            {{ $tenant->home_address_line_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.emergency_person_name') }}
                        </th>
                        <td>
                            {{ $tenant->emergency_person_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.emergency_person_phone_number_1') }}
                        </th>
                        <td>
                            {{ $tenant->emergency_person_phone_number_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.emergency_person_phone_number_2') }}
                        </th>
                        <td>
                            {{ $tenant->emergency_person_phone_number_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.room') }}
                        </th>
                        <td>
                            {{ $tenant->room->number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Tenant::STATUS_SELECT[$tenant->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.tenant.fields.extra_note') }}
                        </th>
                        <td>
                            {{ $tenant->extra_note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.tenants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection

@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.floor.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.floors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.floor.fields.id') }}
                        </th>
                        <td>
                            {{ $floor->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.floor.fields.floor_name') }}
                        </th>
                        <td>
                            {{ $floor->floor_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.floor.fields.floor_number') }}
                        </th>
                        <td>
                            {{ $floor->floor_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.floor.fields.active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $floor->active ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.floor.fields.description') }}
                        </th>
                        <td>
                            {{ $floor->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-primary" href="{{ route('admin.floors.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection

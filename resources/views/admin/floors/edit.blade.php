@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.floor.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.floors.update", [$floor->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="floor_name">{{ trans('cruds.floor.fields.floor_name') }}</label>
                <input class="form-control {{ $errors->has('floor_name') ? 'is-invalid' : '' }}" type="text" name="floor_name" id="floor_name" value="{{ old('floor_name', $floor->floor_name) }}" required>
                @if($errors->has('floor_name'))
                    <span class="text-danger">{{ $errors->first('floor_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.floor.fields.floor_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="floor_number">{{ trans('cruds.floor.fields.floor_number') }}</label>
                <input class="form-control {{ $errors->has('floor_number') ? 'is-invalid' : '' }}" type="text" name="floor_number" id="floor_number" value="{{ old('floor_number', $floor->floor_number) }}" required>
                @if($errors->has('floor_number'))
                    <span class="text-danger">{{ $errors->first('floor_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.floor.fields.floor_number_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $floor->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.floor.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <span class="text-danger">{{ $errors->first('active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.floor.fields.active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.floor.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $floor->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.floor.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
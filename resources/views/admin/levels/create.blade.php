@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.level.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.levels.store") }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label class="required" for="level_name">{{ trans('cruds.level.fields.level_name') }}</label>
                <input class="form-control {{ $errors->has('level_name') ? 'is-invalid' : '' }}" type="text" name="level_name" id="level_name" value="{{ old('level_name', '') }}" required>
                @if($errors->has('level_name'))
                    <span class="text-danger">{{ $errors->first('level_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.level.fields.level_name_helper') }}</span>
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

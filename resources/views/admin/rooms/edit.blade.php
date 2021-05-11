@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label class="required" for="number">{{ trans('cruds.room.fields.number') }}</label>
                <input class="form-control {{ $errors->has('number') ? 'is-invalid' : '' }}" type="text" name="number" id="number" value="{{ old('number', $room->number) }}" required>
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status">{{ trans('cruds.room.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', $room->status) }}" step="1">
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="floor_id">{{ trans('cruds.room.fields.floor') }}</label>
                <select class="form-control select2 {{ $errors->has('floor') ? 'is-invalid' : '' }}" name="floor_id" id="floor_id" required>
                    @foreach($floors as $id => $entry)
                        <option value="{{ $id }}" {{ (old('floor_id') ? old('floor_id') : $room->floor->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('floor'))
                    <span class="text-danger">{{ $errors->first('floor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.floor_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rent">{{ trans('cruds.room.fields.rent') }}</label>
                <input class="form-control {{ $errors->has('rent') ? 'is-invalid' : '' }}" type="number" name="rent" id="rent" value="{{ old('rent', $room->rent) }}" step="0.01" required>
                @if($errors->has('rent'))
                    <span class="text-danger">{{ $errors->first('rent') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.rent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="details">{{ trans('cruds.room.fields.details') }}</label>
                <textarea class="form-control {{ $errors->has('details') ? 'is-invalid' : '' }}" name="details" id="details">{{ old('details', $room->details) }}</textarea>
                @if($errors->has('details'))
                    <span class="text-danger">{{ $errors->first('details') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.details_helper') }}</span>
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

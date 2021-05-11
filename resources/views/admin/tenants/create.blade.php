@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.tenant.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tenants.store") }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.tenant.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="middle_name">{{ trans('cruds.tenant.fields.middle_name') }}</label>
                <input class="form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}" type="text" name="middle_name" id="middle_name" value="{{ old('middle_name', '') }}" required>
                @if($errors->has('middle_name'))
                    <span class="text-danger">{{ $errors->first('middle_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.middle_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.tenant.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.tenant.fields.gender') }}</label>
                @foreach(App\Models\Tenant::GENDER_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('gender') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="gender_{{ $key }}" name="gender" value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="gender_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="department">{{ trans('cruds.tenant.fields.department') }}</label>
                <input class="form-control {{ $errors->has('department') ? 'is-invalid' : '' }}" type="text" name="department" id="department" value="{{ old('department', '') }}">
                @if($errors->has('department'))
                    <span class="text-danger">{{ $errors->first('department') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.department_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone">{{ trans('cruds.tenant.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}" required>
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.tenant.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tenant_image">{{ trans('cruds.tenant.fields.tenant_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('tenant_image') ? 'is-invalid' : '' }}" id="tenant_image-dropzone">
                </div>
                @if($errors->has('tenant_image'))
                    <span class="text-danger">{{ $errors->first('tenant_image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.tenant_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.tenant.fields.id_type') }}</label>
                <select class="form-control {{ $errors->has('id_type') ? 'is-invalid' : '' }}" name="id_type" id="id_type" required>
                    <option value disabled {{ old('id_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Tenant::ID_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('id_type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_type'))
                    <span class="text-danger">{{ $errors->first('id_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.id_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="id_number">{{ trans('cruds.tenant.fields.id_number') }}</label>
                <input class="form-control {{ $errors->has('id_number') ? 'is-invalid' : '' }}" type="number" name="id_number" id="id_number" value="{{ old('id_number', '0') }}" step="1" required>
                @if($errors->has('id_number'))
                    <span class="text-danger">{{ $errors->first('id_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.id_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tenant_id_image">{{ trans('cruds.tenant.fields.tenant_id_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('tenant_id_image') ? 'is-invalid' : '' }}" id="tenant_id_image-dropzone">
                </div>
                @if($errors->has('tenant_id_image'))
                    <span class="text-danger">{{ $errors->first('tenant_id_image') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.tenant_id_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_address_line_1">{{ trans('cruds.tenant.fields.home_address_line_1') }}</label>
                <input class="form-control {{ $errors->has('home_address_line_1') ? 'is-invalid' : '' }}" type="text" name="home_address_line_1" id="home_address_line_1" value="{{ old('home_address_line_1', '') }}">
                @if($errors->has('home_address_line_1'))
                    <span class="text-danger">{{ $errors->first('home_address_line_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.home_address_line_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_address_line_2">{{ trans('cruds.tenant.fields.home_address_line_2') }}</label>
                <input class="form-control {{ $errors->has('home_address_line_2') ? 'is-invalid' : '' }}" type="text" name="home_address_line_2" id="home_address_line_2" value="{{ old('home_address_line_2', '') }}">
                @if($errors->has('home_address_line_2'))
                    <span class="text-danger">{{ $errors->first('home_address_line_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.home_address_line_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="emergency_person_name">{{ trans('cruds.tenant.fields.emergency_person_name') }}</label>
                <input class="form-control {{ $errors->has('emergency_person_name') ? 'is-invalid' : '' }}" type="text" name="emergency_person_name" id="emergency_person_name" value="{{ old('emergency_person_name', '') }}" required>
                @if($errors->has('emergency_person_name'))
                    <span class="text-danger">{{ $errors->first('emergency_person_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.emergency_person_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="emergency_person_phone_number_1">{{ trans('cruds.tenant.fields.emergency_person_phone_number_1') }}</label>
                <input class="form-control {{ $errors->has('emergency_person_phone_number_1') ? 'is-invalid' : '' }}" type="text" name="emergency_person_phone_number_1" id="emergency_person_phone_number_1" value="{{ old('emergency_person_phone_number_1', '') }}" required>
                @if($errors->has('emergency_person_phone_number_1'))
                    <span class="text-danger">{{ $errors->first('emergency_person_phone_number_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.emergency_person_phone_number_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="emergency_person_phone_number_2">{{ trans('cruds.tenant.fields.emergency_person_phone_number_2') }}</label>
                <input class="form-control {{ $errors->has('emergency_person_phone_number_2') ? 'is-invalid' : '' }}" type="text" name="emergency_person_phone_number_2" id="emergency_person_phone_number_2" value="{{ old('emergency_person_phone_number_2', '') }}">
                @if($errors->has('emergency_person_phone_number_2'))
                    <span class="text-danger">{{ $errors->first('emergency_person_phone_number_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.emergency_person_phone_number_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="room_id">{{ trans('cruds.tenant.fields.room') }}</label>
                <select class="form-control select2 {{ $errors->has('room') ? 'is-invalid' : '' }}" name="room_id" id="room_id" required>
                    @foreach($rooms as $id => $entry)
                        <option value="{{ $id }}" {{ old('room_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('room'))
                    <span class="text-danger">{{ $errors->first('room') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.room_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.tenant.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Tenant::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="extra_note">{{ trans('cruds.tenant.fields.extra_note') }}</label>
                <textarea class="form-control {{ $errors->has('extra_note') ? 'is-invalid' : '' }}" name="extra_note" id="extra_note">{{ old('extra_note') }}</textarea>
                @if($errors->has('extra_note'))
                    <span class="text-danger">{{ $errors->first('extra_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.tenant.fields.extra_note_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.tenantImageDropzone = {
    url: '{{ route('admin.tenants.storeMedia') }}',
    maxFilesize: 20, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="tenant_image"]').remove()
      $('form').append('<input type="hidden" name="tenant_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="tenant_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($tenant) && $tenant->tenant_image)
      var file = {!! json_encode($tenant->tenant_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="tenant_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
<script>
    var uploadedTenantIdImageMap = {}
Dropzone.options.tenantIdImageDropzone = {
    url: '{{ route('admin.tenants.storeMedia') }}',
    maxFilesize: 20, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="tenant_id_image[]" value="' + response.name + '">')
      uploadedTenantIdImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedTenantIdImageMap[file.name]
      }
      $('form').find('input[name="tenant_id_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($tenant) && $tenant->tenant_id_image)
      var files = {!! json_encode($tenant->tenant_id_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="tenant_id_image[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection

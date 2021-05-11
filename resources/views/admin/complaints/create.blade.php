@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.complaint.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.complaints.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="complaint_title">{{ trans('cruds.complaint.fields.complaint_title') }}</label>
                <input class="form-control {{ $errors->has('complaint_title') ? 'is-invalid' : '' }}" type="text" name="complaint_title" id="complaint_title" value="{{ old('complaint_title', '') }}" required>
                @if($errors->has('complaint_title'))
                    <span class="text-danger">{{ $errors->first('complaint_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.complaint.fields.complaint_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="complaint_content">{{ trans('cruds.complaint.fields.complaint_content') }}</label>
                <textarea class="form-control {{ $errors->has('complaint_content') ? 'is-invalid' : '' }}" name="complaint_content" id="complaint_content">{{ old('complaint_content') }}</textarea>
                @if($errors->has('complaint_content'))
                    <span class="text-danger">{{ $errors->first('complaint_content') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.complaint.fields.complaint_content_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="files_videos">{{ trans('cruds.complaint.fields.files_videos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('files_videos') ? 'is-invalid' : '' }}" id="files_videos-dropzone">
                </div>
                @if($errors->has('files_videos'))
                    <span class="text-danger">{{ $errors->first('files_videos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.complaint.fields.files_videos_helper') }}</span>
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
    var uploadedFilesVideosMap = {}
Dropzone.options.filesVideosDropzone = {
    url: '{{ route('admin.complaints.storeMedia') }}',
    maxFilesize: 200, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 200
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="files_videos[]" value="' + response.name + '">')
      uploadedFilesVideosMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedFilesVideosMap[file.name]
      }
      $('form').find('input[name="files_videos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($complaint) && $complaint->files_videos)
          var files =
            {!! json_encode($complaint->files_videos) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="files_videos[]" value="' + file.file_name + '">')
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
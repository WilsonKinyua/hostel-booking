@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.expense.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.expenses.update", [$expense->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label class="required" for="expense_name">{{ trans('cruds.expense.fields.expense_name') }}</label>
                <input class="form-control {{ $errors->has('expense_name') ? 'is-invalid' : '' }}" type="text" name="expense_name" id="expense_name" value="{{ old('expense_name', $expense->expense_name) }}" required>
                @if($errors->has('expense_name'))
                    <span class="text-danger">{{ $errors->first('expense_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.expense_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.expense.fields.category') }}</label>
                <select class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category" id="category" required>
                    <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Expense::CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('category', $expense->category) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <span class="text-danger">{{ $errors->first('category') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.expense.fields.payment_method') }}</label>
                <select class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method" required>
                    <option value disabled {{ old('payment_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Expense::PAYMENT_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_method', $expense->payment_method) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="reference_number">{{ trans('cruds.expense.fields.reference_number') }}</label>
                <input class="form-control {{ $errors->has('reference_number') ? 'is-invalid' : '' }}" type="text" name="reference_number" id="reference_number" value="{{ old('reference_number', $expense->reference_number) }}" required>
                @if($errors->has('reference_number'))
                    <span class="text-danger">{{ $errors->first('reference_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.reference_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.expense.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $expense->amount) }}" step="0.01" required>
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expense_receipt">{{ trans('cruds.expense.fields.expense_receipt') }}</label>
                <div class="needsclick dropzone {{ $errors->has('expense_receipt') ? 'is-invalid' : '' }}" id="expense_receipt-dropzone">
                </div>
                @if($errors->has('expense_receipt'))
                    <span class="text-danger">{{ $errors->first('expense_receipt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.expense_receipt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.expense.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $expense->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.expense.fields.description_helper') }}</span>
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
    var uploadedExpenseReceiptMap = {}
Dropzone.options.expenseReceiptDropzone = {
    url: '{{ route('admin.expenses.storeMedia') }}',
    maxFilesize: 20, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="expense_receipt[]" value="' + response.name + '">')
      uploadedExpenseReceiptMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedExpenseReceiptMap[file.name]
      }
      $('form').find('input[name="expense_receipt[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($expense) && $expense->expense_receipt)
          var files =
            {!! json_encode($expense->expense_receipt) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="expense_receipt[]" value="' + file.file_name + '">')
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

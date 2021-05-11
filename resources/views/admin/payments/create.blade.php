@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.payment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payments.store") }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="created_by_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label class="required" for="tenant_id">{{ trans('cruds.payment.fields.tenant') }}</label>
                <select class="form-control select2 {{ $errors->has('tenant') ? 'is-invalid' : '' }}" name="tenant_id" id="tenant_id" required>
                    @foreach($tenants as $id => $entry)
                        <option value="{{ $id }}" {{ old('tenant_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('tenant'))
                    <span class="text-danger">{{ $errors->first('tenant') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.tenant_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.payment.fields.payment_method') }}</label>
                <select class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" name="payment_method" id="payment_method" required>
                    <option value disabled {{ old('payment_method', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Payment::PAYMENT_METHOD_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('payment_method', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_amount">{{ trans('cruds.payment.fields.total_amount') }}</label>
                <input class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" type="number" name="total_amount" id="total_amount" value="{{ old('total_amount', '') }}" step="0.01" required>
                @if($errors->has('total_amount'))
                    <span class="text-danger">{{ $errors->first('total_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.total_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_paid">{{ trans('cruds.payment.fields.total_paid') }}</label>
                <input class="form-control {{ $errors->has('total_paid') ? 'is-invalid' : '' }}" type="number" name="total_paid" id="total_paid" value="{{ old('total_paid', '0') }}" step="0.01" required>
                @if($errors->has('total_paid'))
                    <span class="text-danger">{{ $errors->first('total_paid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.total_paid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transactionid">{{ trans('cruds.payment.fields.transactionid') }}</label>
                <input class="form-control {{ $errors->has('transactionid') ? 'is-invalid' : '' }}" type="text" name="transactionid" id="transactionid" value="{{ old('transactionid', 'NULL') }}" required>
                @if($errors->has('transactionid'))
                    <span class="text-danger">{{ $errors->first('transactionid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.transactionid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.payment.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes') }}</textarea>
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.notes_helper') }}</span>
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

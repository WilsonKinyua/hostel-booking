@extends('layouts.admin')
@section('content')
@if (Auth::user()->id == 1)
@can('tenant_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.tenants.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.tenant.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Tenant', 'route' => 'admin.tenants.parseCsvImport'])
        </div>
    </div>
@endcan
@endif
<div class="card">
    <div class="card-header">
        @if (Auth::user()->id == 1)
        {{ trans('cruds.tenant.title_singular') }} {{ trans('global.list') }}
        @else
        Tenant Details
        @endif
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Tenant">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.first_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.middle_name') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.last_name') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.tenant.fields.gender') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.department') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.tenant.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.tenant_image') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.id_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.id_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.tenant_id_image') }}
                        </th> --}}
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.home_address_line_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.home_address_line_2') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.tenant.fields.emergency_person_name') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.emergency_person_phone_number_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.emergency_person_phone_number_2') }}
                        </th> --}}
                        <th>
                            {{ trans('cruds.tenant.fields.room') }}
                        </th>
                        <th>
                            {{ trans('cruds.tenant.fields.status') }}
                        </th>
                        {{-- <th>
                            {{ trans('cruds.tenant.fields.extra_note') }}
                        </th> --}}
                        <th>
                            Created On
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tenants as $key => $tenant)
                        <tr data-entry-id="{{ $tenant->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $tenant->id ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->first_name ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->middle_name ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $tenant->last_name ?? '' }}
                            </td> --}}
                            <td>
                                {{ App\Models\Tenant::GENDER_RADIO[$tenant->gender] ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $tenant->department ?? '' }}
                            </td> --}}
                            <td>
                                {{ $tenant->phone ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->email ?? '' }}
                            </td>
                            <td>
                                @if($tenant->tenant_image)
                                    <a href="{{ $tenant->tenant_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $tenant->tenant_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            {{-- <td>
                                {{ App\Models\Tenant::ID_TYPE_SELECT[$tenant->id_type] ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->id_number ?? '' }}
                            </td>
                            <td>
                                @foreach($tenant->tenant_id_image as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $tenant->home_address_line_1 ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->home_address_line_2 ?? '' }}
                            </td> --}}
                            <td>
                                {{ $tenant->emergency_person_name ?? '' }}
                            </td>
                            {{-- <td>
                                {{ $tenant->emergency_person_phone_number_1 ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->emergency_person_phone_number_2 ?? '' }}
                            </td> --}}
                            <td>
                                {{ $tenant->room->number ?? '' }}
                            </td>
                            <td>
                                {{ $tenant->created_at->diffForHumans() ?? '' }}
                            </td>
                            <td>
                                <spna class="badge badge-danger">{{ App\Models\Tenant::STATUS_SELECT[$tenant->status] ?? '' }}</spna>
                            </td>
                            {{-- <td>
                                {{ $tenant->extra_note ?? '' }}
                            </td> --}}

                            <td>
                                @can('tenant_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.tenants.show', $tenant->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('tenant_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.tenants.edit', $tenant->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('tenant_delete')
                                    <form action="{{ route('admin.tenants.destroy', $tenant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('tenant_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tenants.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Tenant:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  $('div#sidebar').on('transitionend', function(e) {
    $($.fn.dataTable.tables(true)).DataTable().columns.adjust();
  })

})

</script>
@endsection

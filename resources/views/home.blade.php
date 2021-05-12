@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold text-success">
                    <h4>Hello! Welcome Back, <span class="badge badge-primary">{{ Auth::user()->name }}</span></h4>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @if (Auth::user()->id == 1)
                        <div class="{{ $settings4['column_class'] }}">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa-fw nav-icon fas fa-users"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings4['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings4['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        @endif

                        <div class="{{ $settings5['column_class'] }}">
                            <div class="info-box bg-success">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-concierge-bell"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings5['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings5['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="{{ $settings6['column_class'] }}">
                            <div class="info-box bg-primary">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-book-open"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings6['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings6['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="{{ $settings7['column_class'] }}">
                            <div class="info-box bg-info">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-users"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings7['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings7['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        @if (Auth::user()->id == 1)
                        <div class="{{ $settings8['column_class'] }}">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings8['chart_title'] }}</span>
                                    <span class="info-box-number">Ksh {{ number_format($settings8['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        <div class="{{ $settings9['column_class'] }}">
                            <div class="info-box bg-success">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-list"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings9['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings9['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        @endif
                        <div class="{{ $settings10['column_class'] }}">
                            <div class="info-box bg-primary">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-pen"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings10['chart_title'] }}</span>
                                    <span class="info-box-number">{{ number_format($settings10['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        @if (Auth::user()->id == 1)
                        <div class="{{ $settings11['column_class'] }}">
                            <div class="info-box bg-info">
                                <span class="info-box-icon bg-red" style="display:flex; flex-direction: column; justify-content: center;">
                                    <i class="fa fa-chart-line"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">{{ $settings11['chart_title'] }}</span>
                                    <span class="info-box-number">Ksh {{ number_format($settings11['total_number']) }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings1['column_class'] }}" style="overflow-x: auto;">
                            <h3>{{ $settings1['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead class="bg-primary">
                                    <tr>
                                        @foreach($settings1['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', $settings1['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings1['data'] as $entry)
                                        <tr>
                                            @foreach($settings1['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings1['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="{{ $chart2->options['column_class'] }}">
                            <h3>{!! $chart2->options['chart_title'] !!}</h3>
                            {!! $chart2->renderHtml() !!}
                        </div>
                        <div class="{{ $chart3->options['column_class'] }}">
                            <h3>{!! $chart3->options['chart_title'] !!}</h3>
                            {!! $chart3->renderHtml() !!}
                        </div>

                        {{-- Widget - latest entries --}}
                        <div class="{{ $settings12['column_class'] }}" style="overflow-x: auto;">
                            <h3>{{ $settings12['chart_title'] }}</h3>
                            <table class="table table-bordered table-striped">
                                <thead class="bg-info">
                                    <tr>
                                        @foreach($settings12['fields'] as $key => $value)
                                            <th>
                                                {{ trans(sprintf('cruds.%s.fields.%s', $settings12['translation_key'] ?? 'pleaseUpdateWidget', $key)) }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($settings12['data'] as $entry)
                                        <tr>
                                            @foreach($settings12['fields'] as $key => $value)
                                                <td>
                                                    @if($value === '')
                                                        {{ $entry->{$key} }}
                                                    @elseif(is_iterable($entry->{$key}))
                                                        @foreach($entry->{$key} as $subEentry)
                                                            <span class="badge badge-info">{{ $subEentry->{$value} }}</span>
                                                        @endforeach
                                                    @else
                                                        {{ data_get($entry, $key . '.' . $value) }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="{{ count($settings12['fields']) }}">{{ __('No entries found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        @endif


                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Calendar
        </div>
        <div class=" card-body">
            <div class="row">
                <div class="col-lg-12">
                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart2->renderJs() !!}{!! $chart3->renderJs() !!}
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events={!! json_encode($events) !!};
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: events,


            })
        });
</script>
@endsection

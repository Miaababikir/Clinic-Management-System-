@extends('admin.layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/fullcalendar.css') }}">
    <style>
        .fc-day-grid-event {
            margin: 1px 2px 0;
            padding: 7px 1px;
            border-radius: 0;
        }
    </style>
@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Doctor Schedule</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}">Hospital</a></li>
                <li class="active">Doctor Schedule</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <div id='calendar'></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('vendor/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/moment.js') }}"></script>
    <script src="{{ asset('vendor/admin/js/fullcalendar.js') }}"></script>
    <script>
        $('#calendar').fullCalendar({
            allDAy: true,
            events: {!! $events !!},
        });
    </script>
@endsection
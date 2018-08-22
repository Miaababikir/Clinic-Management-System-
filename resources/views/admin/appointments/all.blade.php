@extends('admin.layouts.admin')

@section('styles')

    <link rel="stylesheet" href="{{ asset('vendor/admin/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin/css/datatable-bottons.css') }}">

@endsection

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">All Doctors</h4></div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}">Hospital</a></li>
                <li class="active">Add Doctor</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">All Doctors Details</h3>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient Name</th>
                        <th>Date</th>
                        <th>Confirmation</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="appointment in appointments">
                        <td>@{{ appointment.id }}</td>
                        <td>@{{ appointment.patient }}</td>
                        <td>@{{ appointment.start }}</td>
                        <td>
                            <span class="label label-success" v-if="appointment.activation == 1">Confirmed</span>
                            <span class="label label-danger" v-else>Not Confirmed</span>
                        </td>
                        <td class="text-nowrap">
                            <a href="#" data-toggle="tooltip" data-original-title="Show"> <i class="fa fa-external-link text-inverse m-r-10"></i> </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('vendor/admin/js/jquery.dataTables.min.js') }}"></script>

    <script>

        let app = new Vue({
            el: '#app',
            data: {
                appointments: {!! $appointments !!},
            },
            mounted() {
                $('.table').dataTable();
            },
            methods: {

            }
        });

    </script>

@endsection
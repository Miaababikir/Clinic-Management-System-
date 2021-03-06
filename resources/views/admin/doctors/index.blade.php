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
                        <th>Doctor Name</th>
                        <th>Username</th>
                        <th>Speciality</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="doctor in doctors">
                        <td>@{{ doctor.id }}</td>
                        <td>@{{ doctor.full_name }}</td>
                        <td>@@{{ doctor.username }}</td>
                        <td>@{{ doctor.speciality }}</td>
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
                doctors: {!! $doctors !!},
            },
            mounted() {
                $('.table').dataTable();
            },
            methods: {

            }
        });

    </script>

@endsection
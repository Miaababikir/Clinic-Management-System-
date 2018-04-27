@extends('admin.layouts.admin')

@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Doctor</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin') }}">Hospital</a></li>
                <li class="active">Add Doctor</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Basic Information</h3>
                <form class="form-material form-horizontal" action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12" for="name">Name
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="name" name="full_name" class="form-control" placeholder="enter your name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="username">Username
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="username" name="username" class="form-control" placeholder="enter your username" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="Password">Password
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="Password" name="password" class="form-control" placeholder="enter your password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12" for="gender">Gender</label>
                        <div class="col-sm-12">
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Profile Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" required> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="special">Speciality
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="special" name="speciality" class="form-control" placeholder="e.g. Dentist" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="des">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="des" rows="3" name="description" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-block waves-effect waves-light m-r-10">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
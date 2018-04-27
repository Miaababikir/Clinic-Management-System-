@extends('layouts.app')

@section('content')

    <div class="container p-t-100 p-b-100">
        <h2>Your Appointment Code <small>Don't loose it</small></h2>
        <div class="panel panel-success">
            <div class="panel-heading"><h3 class="panel-title">Please keep it with you</h3></div>
            <div class="panel-body text-center">
                <strong>{{ $token }}</strong>
            </div>
        </div>
    </div>

@endsection


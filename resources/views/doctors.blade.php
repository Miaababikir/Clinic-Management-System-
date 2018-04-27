@extends('layouts.app')

@section('content')

    <div class="fh5co-team fh5co-light-grey-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Our Awesome Doctors</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                </div>
                @foreach($doctors as $doctor)
                    <div class="col-md-4 fh5co-staff text-center animate-box">
                        <img src="{{ $doctor->profile_image }}" alt="Free HTML5 Bootstrap Template"
                             class="img-responsive">
                        <h3>{{ $doctor->name }}</h3>
                        <h4>{{ $doctor->speciality }}</h4>
                        <p>{{ $doctor->description }}</p>
                        <a href="{{ route('appointments') }}" class="btn btn-primary">Make an appointment</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="fh5co-team fh5co-light-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Check if your doctor is free now</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Doctor</th>
                        <th>Speciality</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $doctor->full_name }}</td>
                            <td>{{ $doctor->speciality }}</td>
                            <td><span class="label label-success">Available</span></td>
                            <td><a href="{{ route('appointments') }}" class="btn btn-sm btn-success">Book</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

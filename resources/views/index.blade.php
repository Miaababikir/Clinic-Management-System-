@extends('layouts.app')

@section('content')

    <aside id="fh5co-hero" class="js-fullheight" style="height: 347px;">
        <div class="flexslider js-fullheight" style="height: 347px;">
            <ul class="slides">
                <li style="background-image: url(&quot;{{ asset('images/slide_2.jpg') }}&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 347px;"
                    class="flex-active-slide" data-thumb-alt="">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text animated fadeInUp"
                             style="height: 347px;">
                            <div class="slider-text-inner">
                                <h2>Make your appointment now</h2>
                                <p><a href="{{ route('appointments') }}" class="btn btn-primary btn-lg">Make an
                                        appointment</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(&quot;{{ asset('images/slide_3.jpg') }}&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1; height: 347px;"
                    data-thumb-alt="">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text"
                             style="height: 347px;">
                            <div class="slider-text-inner">
                                <h2>We Think Different That Others Can't</h2>
                                <p><a href="{{ route('appointments') }}" class="btn btn-primary btn-lg">Make an
                                        appointment</a></p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ol class="flex-control-nav flex-control-paging">
                <li><a href="#" class="flex-active">1</a></li>
                <li><a href="#">2</a></li>
            </ol>
            <ul class="flex-direction-nav">
                <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-services-section" class="fh5co-light-grey-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Appointments details</h2>
                    <p>You can check your appointments and see your details and confirm it or cancel it. </p>
                </div>
                <div class="col-md-12">
                    <input type="text" name="code" class="form-control"
                           placeholder="Put your appoinments code here" v-model="code" @keyup.enter="getAppointment">
                    <div class="panel panel-info m-t-30" v-if="appointment != ''">
                        <div class="panel-heading">
                            <h3 class="panel-title">Hi there, this is your information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <label>Patient name:</label><span> @{{ appointment.patient }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label>Doctor name:</label><span> @{{ appointment.doctor }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label>Appointment date:</label><span> @{{ appointment.start }}</span>
                                </div>
                                <div class="col-md-6">
                                    <div v-if="appointment.activation == 1"><label>Appointment Confirmation:</label> <span class="label label-success">Already Confirmed</span><br></div>
                                    <div v-else=""><label>Appointment Confirmation:</label> <span class="label label-danger">Not Confirmed</span><br></div>
                                </div>
                                <div class="col-md-12 text-center m-t-20">
                                    <button class="btn btn-success btn-sm" v-if="appointment.activation == 0" @click="confirm(appointment.id)">Confirm</button>
                                    <button class="btn btn-warning btn-sm" v-if="appointment.activation == 1" @click="cancel(appointment.id)">Cancel Confirmation</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Our Awesome Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-hospital-o"></i>
                        <div class="desc">
                            <h3>Accommodation and meals</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-user-md"></i>
                        <div class="desc">
                            <h3>Nursing</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-heartbeat"></i>
                        <div class="desc">
                            <h3>Laboratory</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-medkit"></i>
                        <div class="desc">
                            <h3>Drugs prescribed </h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-line-chart"></i>
                        <div class="desc">
                            <h3>Anaesthetic facilities</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="services">
                        <i class="icon-pie-chart"></i>
                        <div class="desc">
                            <h3>Radiotherapy</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live in Bookmarksgrove.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                        <h3>{{ $doctor->full_name }}</h3>
                        <h4>{{ $doctor->speciality }}</h4>
                        <p>{{ $doctor->description }}</p>
                        <a href="{{ route('appointments') }}" class="btn btn-primary">Make an appointment</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div id="fh5co-testimony-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Patients Feedback</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-offset-0 to-animate">
                    <div class="wrap-testimony animate-box">
                        <div class="owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('images/person1.jpg') }}" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>"Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean."</p>
                                    </blockquote>
                                    <span>Athan Smith, via <a href="#" class="twitter">Twitter</a></span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('images/person2.jpg') }}" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>"Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean."</p>
                                    </blockquote>
                                    <span>Nathalie Kosley, via <a href="#" class="twitter">Twitter</a></span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{ asset('images/person3.jpg') }}" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>"Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean."</p>
                                    </blockquote>
                                    <span>Yanna Kuzuki, via <a href="#" class="twitter">Twitter</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                code: '',
                appointment: ''
            },
            methods: {
                getAppointment() {
                    window.axios.post('get-appointment', {
                        code: this.code
                    })
                        .then((response) => {
                            console.log(response);
                            this.appointment = response.data;
                        })
                        .catch((error) => {
                            console.log(error);
                            this.appointment = '';
                            $.toast({
                                heading: 'Your appointment not found please try again',
                                text: '',
                                position: 'top-center',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter: 6000,
                                stack: 6
                            });
                        });
                },
                confirm(id) {
                    window.axios.get('appointment/' + id + '/confirmation')
                        .then((response) => {
                            console.log(response);
                            this.appointment = response.data;
                            $.toast({
                                heading: 'Your appointment has been confirmed',
                                text: '',
                                position: 'top-center',
                                loaderBg:'#ff6849',
                                icon: 'success',
                                hideAfter: 6000,
                                stack: 6
                            });
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                },
                cancel(id) {
                    window.axios.get('appointment/' + id + '/cancel')
                        .then((response) => {
                            console.log(response);
                            this.appointment = response.data;
                            $.toast({
                                heading: 'Your appointment has been canceld',
                                text: '',
                                position: 'top-center',
                                loaderBg:'#ff6849',
                                icon: 'warning',
                                hideAfter: 6000,
                                stack: 6
                            });
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            }
        });
    </script>

@endsection
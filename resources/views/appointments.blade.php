@extends('layouts.app')

@section('content')

    <div class="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
                    <h2>Make your appointment</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. </p>
                </div>
                <form action="{{ route('appointment.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" name="name" id="name" placeholder="Name" type="text" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" name="phone" id="phone" placeholder="Example +123456789"
                                           type="text" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" name="email" id="email"
                                           placeholder="Example example@example.com"
                                           type="text" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doctor">Select doctor</label>
                                    <select class="form-control" name="doctor_id" id="doctor" @change="getDays" v-model="doctor" required>
                                        <option v-for="doctor in doctors"
                                                :value="doctor.id">@{{ doctor.full_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Select your reservation time</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="alert alert-warning" role="alert" v-if="days.length > 0"><strong>Warning!</strong> Your doctor
                                    works just on these days -> [<span v-for="day in days"> @{{ day }}, </span>]
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="body">Describe your status</label>
                                    <textarea name="description" class="form-control" id="body" cols="30" rows="7"
                                              placeholder="Give us a little information about your status" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input value="Submit" class="btn btn-primary" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                doctors: {!! $doctors !!},
                doctor: '',
                days: []
            },
            methods: {
                getDays: function () {
                    window.axios.get('admin/doctors/' + this.doctor +'/days')
                        .then((response) => {
                            console.log(response);
                            this.days = response.data;
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            }
        });
    </script>

@endsection

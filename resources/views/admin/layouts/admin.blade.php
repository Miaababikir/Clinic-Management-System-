<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('admin._includes.head')

</head>
<body class="fix-sidebar">
<div id="app">

    <div id="wrapper">
    @include('admin._includes.header')
    @include('admin._includes.sidebar')
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->
            @include('admin._includes.footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


</div>

@include('admin._includes.scripts')
@include('admin._includes.messages')
</body>
</html>

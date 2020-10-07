<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="keywords here">
    <meta name="description"
        content="description here">
    <meta name="robots" content="noindex,nofollow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layouts._header')
        @include('layouts._sidebar')

        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
              @yield('content')
            </section>
            <!-- /.content -->
        </div>
        @include('layouts._footer')
    </div>

    <!-- JQuery, Bootstrap, & Popper JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
</body>

</html>

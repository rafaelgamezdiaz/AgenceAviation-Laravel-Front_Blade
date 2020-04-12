<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Aviation - Agence</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- bootstrap datetime picker -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themeforest/owl.theme.default.min.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Toast Messages -->
    <link href="{{ asset('css/toastr/toastr.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('styles')
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<!doctype html>
<html lang="ar">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'لوحة التحكم/ مصرف الاندلس') }} -  @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="{{ asset('login_style/css/style.css') }}" rel="stylesheet">

	</head>
	<body dir="rtl">
	<section class="ftco-section">
        @yield('content')

	</section>
    <script src="{{ asset('login_style/js/jquery.min.js') }}"></script>
    <script src="{{ asset('login_style/js/popper.js') }}"></script>
    <script src="{{ asset('login_style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login_style/js/main.js') }}"></script>


	</body>
</html>


<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Login Page of ClinicJet" name="description" />
    <meta content="" name="ClinicJet" />

	<title>{{config('app.name','ClinicJet')}} | @yield('title')</title>

	@include('partials._authcss')
</head>
<body class="login">
	
	@yield('content')
	@include('partials._authscripts')
</body>
</html>
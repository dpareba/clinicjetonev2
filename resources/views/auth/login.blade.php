@extends('layouts.authmaster')
@section('title')
	Login	
@endsection
@section('content')

	<div class="logo">
            <a href="">
               xdjfhj <img src="../assets/pages/img/logo-big-white.png" style="height: 17px;" alt="" /> </a>
    </div>
	
	<div class="content">
    	<form action="{{ route('login') }}" method="POST" class="login-form" id="login-form">
    		{{csrf_field()}}
    		<div class="form-title">
    			<span class="form-title">Welcome to ClinicJet.</span>
    			<span class="form-subtitle">Please Login.</span>
    		</div>
    		<div class="form-group">
    			<input type="email" autofocus="" placeholder="Enter Email id" name="email" id="email" class="form-control form-control-solid placeholder-no-fix">
    		</div>
    		<div class="form-group">
    			<input type="password" placeholder="Enter Password" name="password" class="form-control form-control-solid placeholder-no-fix">
    		</div>
    		<div class="form-actions">
    			<button type="submit" class="btn btn-block red uppercase">Login</button>
    		</div>
    	</form>
    </div>

@endsection
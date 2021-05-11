{{-- @extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="#">
                {{ trans('panel.site_title') }}
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ trans('global.register') }}</p>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection --}}
<!doctype html>
<html lang="en">

<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="">
	<meta name="author" content="">

    <title> {{ trans('panel.site_title') }} · Create Account</title>

	<!-- // Favicon -->
	<link href="{{ asset('login_assets/images/favicon.png')}}" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->

	<!-- // Font Awesome 5 Free -->
	<link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- //  CSS files -->
	<link href="{{ asset('login_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('login_assets/css/styles.css')}}" rel="stylesheet">
	<!--  CSS files  // -->
</head>
<body>
	<!-- // Preloader -->
	<div id="nm-preloader" class="nm-aic nm-vh-md-100">
		<div class="nm-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- Preloader // -->

	<main class="d-flex">
		<div class="container main-container">
			<div class="row nm-aic">
				<div class="col-md-6 col-lg-5 offset-lg-1 nm-mb-1 nm-mb-md-1">
					<div class="card">
						<div class="card-content">
							<h2 class="nm-tc nm-mb-1">Create Account</h2>
                            <form method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
								<div class="form-group">
									<label for="inputFullName">Full name</label>
                                    <input id="inputFullName" type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="Your full name" value="{{ old('name', null) }}">
                                    @if($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

								<div class="form-group">
									<label for="inputEmail">Email</label>
                                    <input id="inputEmail" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="Your {{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
								</div>

								<div class="form-group">
									<label for="inputPassword">Password</label>
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Your {{ trans('global.login_password') }}">
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
									<label for="inputPassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
								</div>

								<div class="nm-control nm-checkbox nm-mb-1">
									<input id="temsAndConditions"class="nm-control-input" type="checkbox" required>
									<label class="nm-control-label" for="temsAndConditions">I agree with <a href="#">Terms &amp; Conditions</a></label>
								</div>

								<button type="submit" class="btn btn-block btn-primary text-uppercase nm-btn">Sign Up</button>

								<p class="text-center mb-0 mt-3">
									Already have an account?
									<a class="nm-ft-b" href="{{ route('login') }}">Sign In</a>
								</p>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 offset-lg-1">
					<h2 class="large">Become the best you can be and have fun</h2>
					<ul class="list-unstyled mb-11">
						<li>
							<div class="list nm-aic">
								<div class="icon">
									<i class="fas fa-briefcase"></i>
								</div>

								<div class="content">
									<p>Something about businesses that makes it special and different from everything else</p>
								</div>
							</div>
						</li>

						<li>
							<div class="list nm-aic">
								<div class="icon">
									<i class="far fa-calendar-alt"></i>
								</div>

								<div class="content">
									<p>There is this saying about the business and entrepreneurship, but who remembers it anyway</p>
								</div>
							</div>
						</li>

						<li>
							<div class="list nm-aic">
								<div class="icon">
									<i class="fas fa-trophy"></i>
								</div>

								<div class="content">
									<p>If only there was a template for all your needs wait a second there is and it is called this</p>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</main>

	<!-- // Vendor JS files -->
	<script src="{{ asset('login_assets/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{ asset('login_assets/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Vendor JS files // -->

	<!--  JS files // -->
	<script src="{{ asset('login_assets/js/script.js')}}"></script>
	<!--  JS files // -->


</body>
</html>

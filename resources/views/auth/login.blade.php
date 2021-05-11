{{-- @extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="{{ route('admin.home') }}">
                {{ trans('panel.site_title') }}
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                {{ trans('global.login') }}
            </p>

            @if(session()->has('message'))
                <p class="alert alert-info">
                    {{ session()->get('message') }}
                </p>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email" value="{{ old('email', null) }}">

                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ trans('global.login_password') }}">

                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>


                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">{{ trans('global.remember_me') }}</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.login') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            @if(Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">
                        {{ trans('global.forgot_password') }}
                    </a>
                </p>
            @endif
            <p class="mb-1">
                <a class="text-center" href="{{ route('register') }}">
                    {{ trans('global.register') }}
                </a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="en">

<!-- Mirrored from nimoy.ceosdesigns.sk/template/v05/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 21:32:50 GMT -->
<head>
	<!-- // Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Required meta tags // -->

    <meta name="description" content="Login and Register Form HTML Template - developed by 'ceosdesigns' - sold exclusively on 'themeforest.net'">
	<meta name="author" content="ceosdesigns.sk">

    <title>Nimoy · Login and Register Form HTML Template</title>

	<!-- // Favicon -->
	<link href="images/favicon.png" rel="icon">
	<!-- Favicon // -->

	<!-- // Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;display=swap" rel="stylesheet">
	<!-- Google Web Fonts // -->

	<!-- // Font Awesome 5 Free -->
	<link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" rel="stylesheet">
	<!-- Font Awesome 5 Free // -->

    <!-- // Template CSS files -->
	<link href="{{ asset('login_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('login_assets/css/styles.css')}}" rel="stylesheet">
	<!-- Template CSS files  // -->
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
							<h2 class="nm-tc nm-mb-1">Sign In</h2>
							<form>
								<div class="form-group">
									<label for="inputEmail">Email</label>
									<input id="inputEmail" class="form-control" type="email" tabindex="1" placeholder="Your email" required>
								</div>

								<div class="form-group">
									<label for="inputPassword">Password</label>
									<input id="inputPassword" class="form-control" type="password" tabindex="2" placeholder="Enter your password" required>
								</div>

								<div class="d-flex nm-aic nm-jcb nm-mb-1 nm-mt-1">
									<div class="nm-control nm-checkbox">
										<input id="temsAndConditions"class="nm-control-input" type="checkbox">
										<label class="nm-control-label" for="temsAndConditions">Remember me</label>
									</div>

									<a class="nm-ft-b" href="recover.html">Forgot password?</a>
								</div>

								<button type="submit" class="btn btn-block btn-primary text-uppercase nm-btn">Log In</button>

								<div class="divider nm-tc nm-mb-1 nm-mt-1 nm-mlr-1">
									<span class="divider-content">OR</span>
								</div>

								<div class="row social nm-mb-1">
									<div class="col-xl-6 mb-2 mb-xl-0">
										<a href="#" class="btn btn-block text-uppercase nm-btn btn-facebook">Facebook</a>
									</div>

									<div class="col-xl-6">
										<a href="#" class="btn btn-block text-uppercase nm-btn btn-twitter">Twitter</a>
									</div>
								</div>

								<p class="text-center mb-0">
									Don’t have an account?
									<a class="nm-ft-b" href="signup.html">Sign Up</a>
								</p>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 offset-lg-1">
					<h2 class="large">Become the best you can be and have fun</h2>
					<p class="subtitle">Join the group of more than 300 clients that love us</p>
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

					<button type="submit" class="btn btn-primary text-uppercase nm-btn">Learn more</button>
				</div>
			</div>
		</div>
	</main>

	<!-- // Vendor JS files -->
	<script src="{{ asset('login_assets/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{ asset('login_assets/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Vendor JS files // -->

	<!-- Template JS files // -->
	<script src="{{ asset('login_assets/js/script.js')}}"></script>
	<!-- Template JS files // -->

	<!-- ======================================================= -->
	<!-- // Setting to allow preview of different color variants -->
	<!-- ======================================================= -->
	<div id="settings" style="position: fixed; top: 20%; right: 0%; width: 40px; height: 40px; background-color: #000; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer;">
		<i class="fas fa-cog"></i>
		<div id="colors" style="position: absolute; top: 40px; left: 40px; width: 40px; height: 240px; background-color: #000;">
			<a id="blue" href="#" style="display: block; width: 40px; height: 40px; background-color: #007bff;"></a>
			<a id="beige" href="#" style="display: block; width: 40px; height: 40px; background-color: #eab8a9;"></a>
			<a id="burgundy" href="#" style="display: block; width: 40px; height: 40px; background-color: #af102e;"></a>
			<a id="fuchsia" href="#" style="display: block; width: 40px; height: 40px; background-color: #600da8;"></a>
			<a id="turquoise" href="#" style="display: block; width: 40px; height: 40px; background-color: #50c8cc;"></a>
			<a href="https://nimoy.ceosdesigns.sk/index.html" style="display: block; width: 40px; height: 40px; background-color: #000; color: #fff; display: flex; align-items: center; justify-content: center;"><i class="fas fa-home"></i></a>
		</div>
	</div>

	<script>
		let tmpLocation = window.location.href;
		let tmpEndLocation = tmpLocation.split("https://nimoy.ceosdesigns.sk/");
		let targetLocation = tmpEndLocation[tmpEndLocation.length-1];
		targetLocation = targetLocation.replace(".html","").replace("#", "");
		let targetLocationArray = [];

		if(targetLocation.includes("_")){
			targetLocationArray = targetLocation.split("_");
			targetLocationArray[1] = "_" + targetLocationArray[1];
		}
		else {
			targetLocationArray[0] = targetLocation;
			targetLocationArray[1] = "";
		}

		let l = document.links;
		for(let i=0; i<l.length; i++) {
			let tmp = l[i].attributes.href.nodeValue;
			l[i].attributes.href.nodeValue = tmp.replace("recover","recover" + targetLocationArray[1]).replace("login","login" + targetLocationArray[1]).replace("signup","signup" + targetLocationArray[1]);
		}

		document.getElementById("blue").setAttribute('href',"./" + targetLocationArray[0] + ".html");
		document.getElementById("beige").setAttribute('href',"./" + targetLocationArray[0] + "_1.html");
		document.getElementById("burgundy").setAttribute('href',"./" + targetLocationArray[0] + "_2.html");
		document.getElementById("fuchsia").setAttribute('href',"./" + targetLocationArray[0] + "_3.html");
		document.getElementById("turquoise").setAttribute('href',"./" + targetLocationArray[0] + "_4.html");

		document.getElementById("colors").style.transition = 'all 0.2s';
		document.getElementById("settings").addEventListener("click", () =>{
			let leftPosition = document.getElementById("colors").style.left;

			if(leftPosition == '40px'){
				document.getElementById("colors").style.left = '0px';
			}
			else {
				document.getElementById("colors").style.left = '40px';
			}
		});
	</script>
	<!-- ======================================================= -->
	<!-- Setting to allow preview of different color variants // -->
	<!-- ======================================================= -->
</body>

<!-- Mirrored from nimoy.ceosdesigns.sk/template/v05/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 May 2021 21:32:59 GMT -->
</html>

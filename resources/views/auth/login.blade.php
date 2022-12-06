<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>My Portfolio | Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="My Portfolio"/>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- // Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="{{ asset('portfolio/dash/css/style.css') }}" type="text/css" media="all" />
	<!--// Style-CSS -->
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">My Portfolio</h6>
							<div class="speci-login first-look">
								<img src="{{ asset('portfolio/dash/images/user.png') }}" alt="user" class="img-responsive">
							</div>
						</div>
                        <br>

                        <div class="alert-message" style="color: red">
                            @include('msgs.success')
                        </div>

						<div class="bottom-content">

							<form method="POST" action="{{ route('login') }}">
                            @csrf

								<input type="email" name="email" class="input-form" placeholder="Email"
										required="required" />
								<input type="password" name="password" class="input-form"
										placeholder="Password" required="required" />
								<button type="submit" class="loginhny-btn btn">Login</button>
							</form>
						</div>
					</div>
				</div>

				<div class="w3l-copy-right text-center">
					<p>&copy; {{date('Y')}} My Portfolio. All rights reserved | Developed by
						<a href="#" target="_blank"><strong style="color: #ffffff">Feisal Suleiman Mombo</strong></a></p>
				</div>

			</div>
		</div>
	</section>
	<!-- // Login-section -->
</body>

</html>

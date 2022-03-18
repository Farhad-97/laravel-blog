<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('assets')}}/img/icons/icon-48x48.png" />
	<!-- Start Modal -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- End Modal -->
	<title>Admin</title>

	<link href="{{asset('assets')}}/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back, Charles</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="{{asset('assets')}}/img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form action="{{route('auth')}}" method="post">
										@csrf
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="txtUsername" placeholder="farhad97" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="txtPassword" placeholder="123456" />
											<small>
												<a href="#">Forgot password?</a>
											</small>
										</div>
										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
													Remember me next time
												</span>
											</label>
										</div>
										<div class="text-center mt-3">
											<!-- <a href="#" class="btn btn-lg btn-primary">Sign in</a> -->
											<!-- <button type="login" class="btn btn-primary">Login</button> -->
											<input type="submit" name="btnLogin" value="Log In" class="btn btn-primary">
											<input type="button" name="btnSingup" value="Sing Up" class="btn btn-primary" id="myBtn" data-toggle="modal" data-target="sizedModalMd" />

										</div>
										
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-md" role="document">
												<div class="modal-content">

													<div class="modal-body m-4" style="text-align: left;">
														<form>
															<div class="mb-3">
																<label class="form-label">Name</label>
																<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
															</div>
															<div class="mb-3">
																<label class="form-label">Company</label>
																<input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" />
															</div>
															<div class="mb-3">
																<label class="form-label">Email</label>
																<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
															</div>
															<div class="mb-3">
																<label class="form-label">Password</label>
																<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
															</div>

														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div>
										<!-- END  modal -->


									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>


	<script src="{{asset('assets')}}/js/app.js"></script>
	<script src="{{asset('assets')}}/js/modal.js"></script>


</body>

</html> -->
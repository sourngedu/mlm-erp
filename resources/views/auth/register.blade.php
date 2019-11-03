@extends('layouts.login_layout')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<!-- Begin: Content -->
			<div class="admin-form theme-info mw700" style="margin-top:100px;" id="login1">
				<div class="panel panel-info mt10 br-n">
					<div class="panel-heading heading-border bg-white">
						<div class="section row mn">
							<div class="col-sm-4">
								<a href="#" class="button btn-social facebook span-left mr5 btn-block">
									<span><i class="fa fa-facebook"></i>
									</span>Facebook</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="button btn-social twitter span-left mr5 btn-block">
									<span><i class="fa fa-twitter"></i>
									</span>Twitter</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="button btn-social googleplus span-left btn-block">
									<span><i class="fa fa-google-plus"></i>
									</span>Google+</a>
							</div>
						</div>
					</div>
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<div class="panel-body p25 bg-light">
							<div class="section-divider mt10 mb40">
								<span>Set up your account</span>
							</div>
							<!-- .section-divider -->
							<div class="section row">
								<div class="col-md-6">
										<label for="name" class="field prepend-icon">
												<input type="text" name="name" id="name" class="gui-input" placeholder="Enter your Name" 
												value="{{ old('name') }}" required autocomplete="name">
												<label for="name" class="field-icon"><i class="fa fa-user"></i>
												</label>
										</label>
								</div>
								<!-- end section -->
								<div class="col-md-6">
									<label for="phone" class="field prepend-icon">
											<input type="text" name="phone" id="phone" class="gui-input" placeholder="Enter your Phone"
											value="{{ old('phone') }}" required autocomplete="phone">
											<label for="phone" class="field-icon"><i class="fa fa-user"></i>
											</label>
									</label>
								</div>
								<!-- end section -->
							</div>
							<!-- end .section row section -->
							<div class="section">
								<label for="email" class="field prepend-icon">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
									placeholder="Enter your email">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
									<label for="email" class="field-icon"><i class="fa fa-envelope"></i>
									</label>
								</label>
							</div>
							<!-- end section -->
							<div class="section">
									<label for="password" class="field prepend-icon">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
										placeholder="Type your Password">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<label for="password" class="field-icon"><i class="fa fa-unlock-alt"></i></label>
									</label>
							</div>
							<!-- end section -->
							<div class="section">
								<label for="confirmPassword" class="field prepend-icon">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
									placeholder="Confirm your Password">
									<label for="confirmPassword" class="field-icon"><i class="fa fa-lock"></i></label>
								</label>
							</div>
							<!-- end section -->
						</div>
						<!-- end .form-body section -->
						<div class="panel-footer clearfix">
							<a href="{{ route('login') }}" class="button btn-success mr10 pull-left">Login</a>
							<button type="submit" class="button btn-primary pull-right">Create Account</button>
						</div>
						<!-- end .form-footer section -->
					</form>
				</div>
			</div>
			<!-- End: Content -->
		</div>
	</div>
</div>
@endsection

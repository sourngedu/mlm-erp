@extends('layouts.login_layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
			<div class="col-md-12">
					<div class="card">
							<div class="card-body">
								<div class="admin-form theme-info" id="login1">
										<div class="panel panel-info mt10 br-n">
											<div class="panel-heading heading-border bg-white">
													<span class="panel-title hidden"><i class="fa fa-sign-in"></i>Register</span>
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
											<!-- end .form-header section -->
											<form method="POST" action="{{ route('login') }}">
												@csrf
													<div class="panel-body bg-light p30">
														<div class="row">
															<div class="col-sm-12 pr30">
																<div class="section row hidden">
																		<div class="col-md-4">
																				<a href="#" class="button btn-social facebook span-left mr5 btn-block">
																						<span><i class="fa fa-facebook"></i>
																						</span>Facebook</a>
																		</div>
																		<div class="col-md-4">
																				<a href="#" class="button btn-social twitter span-left mr5 btn-block">
																						<span><i class="fa fa-twitter"></i>
																						</span>Twitter</a>
																		</div>
																		<div class="col-md-4">
																				<a href="#" class="button btn-social googleplus span-left btn-block">
																						<span><i class="fa fa-google-plus"></i>
																						</span>Google+</a>
																		</div>
																</div>
																<div class="section">
																		<label for="username" class="field-label text-muted fs18 mb10">Username</label>
																		<label for="username" class="field prepend-icon">
																			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
																				@error('email')
																					<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																					</span>
																				@enderror
																			<label for="username" class="field-icon"><i class="fa fa-user"></i></label>
																		</label>
																</div>
																<!-- end section -->
																<div class="section">
																	<label for="password" class="field-label text-muted fs18 mb10">{{ __('Password') }}</label>
																		<label for="password" class="field prepend-icon">
																		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
																		@error('password')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																			<label for="password" class="field-icon"><i class="fa fa-lock"></i>
																			</label>
																		</label>
																</div>
																<!-- end section -->
															</div>
														</div>
													</div>
													<!-- end .form-body section -->
													<div class="panel-footer clearfix p10 ph15">
															<button type="submit" class="button btn-primary mr10 pull-right">Login</button>
															<label class="switch block switch-primary pull-left input-align mt10">
																	<input type="checkbox" name="remember" id="remember" checked>
																	<label for="remember" data-on="YES" data-off="NO"></label>
																	<span>Remember me</span>
															</label>
													</div>
													<!-- end .form-footer section -->
											</form>
										</div>
								</div>
							</div>
					</div>
			</div>
	</div>
</div>
@endsection

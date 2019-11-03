@extends('layouts.backend.ace_layout')

@push('css')
		
@endpush

@section('content')
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<div class="row">
					<div class="col-xs-12 ">
					@include('admin.roles.includes.buttons')
					<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Manage Permissions</h4>
					<!-- PAGE CONTENT BEGINS -->
							{!! Form::open(['route' =>'admin.permissions.store', 'method' => 'POST', 'class' => 'form-horizontal',
							'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

							@include('admin.permissions.includes.form')

							<div class="clearfix form-actions">
								<div class="col-md-12 align-right">
										<button class="btn btn-primary btn-xs" type="reset">
												<i class="icon-undo bigger-110"></i>
												{{ __('Reset') }}
										</button>
										<button class="btn btn-success btn-xs" type="submit">
												<i class="icon-ok bigger-110"></i>
												{{ __('Create') }}
										</button>
								</div>
							</div>

							<div class="hr hr-24"></div>

							{!! Form::close() !!}

						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
	</div><!-- /.main-content -->
@endsection

@push('js')

@endpush

@extends('layouts.backend.ace_layout')

@section('pagetitle', '| Edit User')

@push('css')

@endpush

@section('content')
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<div class="page-header">
				</div><!-- /.page-header -->

						<div class="col-xs-12 ">
							@include('admin.users.includes.buttons')
							@include('includes.flash_messages')
						<!-- PAGE CONTENT BEGINS -->
						@include('includes.validation_error_messages')
						{!! Form::model($data['row'], ['route' => ['admin.users.update', $data['row']->id], 'method' => 'POST',
						'class' => 'form-horizontal','id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
						{{method_field('PUT')}}
						{!! Form::hidden('id', $data['row']->id) !!}
						@include('admin.users.includes.form')
						<div class="clearfix form-actions">
								<div class="align-right">
										<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												{{ __('Update') }}
										</button>
								</div>
						</div>
						<div class="hr hr-24"></div>
						{!! Form::close() !!}
						<div class="hr hr-18 dotted hr-double"></div>
					</div><!-- /.col -->

		</div><!-- /.page-content -->
	</div><!-- /.main-content -->
@endsection


@push('js')
  @include('includes.scripts.jquery_validation_scripts')
    <script>
			$(document).ready(function () {
				jqueryValidation(
					{
							"name": {
									required: true,
							},
							"email": {
									required: true,
							},
							"contact_number": {
									required: true,
							},
							"address": {
									required: true,
							}

					},
					{
							"name": {
									required: "Please, Add User Name.",
							},
							"email": {
									required: "Please, Add User Email.",
							},
							"contact_number": {
									required: "Please, Add Contact Number.",
							},
							"address": {
									required: "Please, Add Address.",
							}
					}
				);
      });
    </script>
@endpush
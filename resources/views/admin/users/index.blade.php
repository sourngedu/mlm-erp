{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.backend.ace_layout')

@section('title', '| Users')

@section('content')
	<div class="row">
		<div class="col-xs-12 ">
			<h1><i class="fa fa-users"></i> User Administration</h1>
		</div>
    </div>
    <hr class="hr-6">
	<div class="row">
		<div class="col-xs-12 ">
			@include('admin.users.includes.buttons')
		</div>
	</div>
	@include('admin.users.includes.table')

@endsection

@push('js')
	@include('layouts.backend.includes.datatable_script')
@endpush

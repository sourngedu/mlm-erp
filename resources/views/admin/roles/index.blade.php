{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.backend.ace_layout')

@section('title', '| Manage Roles')

@section('content')

		<div class="col-xs-12 ">
			@include('admin.roles.includes.buttons')
		</div>

	@include('admin.roles.includes.table')

@endsection

@push('js')
	@include('layouts.backend.includes.datatable_script')
	@include('admin.includes.delete_confirm');
@endpush

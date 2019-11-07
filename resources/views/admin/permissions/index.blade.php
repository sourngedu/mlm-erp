{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.backend.ace_layout')

@section('title', '| Permissons')

@section('content')

		<div class="col-xs-12 ">
			@include('admin.permissions.includes.buttons')
		</div>
	{{-- </div> --}}
	@include('admin.permissions.includes.table')

@endsection

@push('js')
	@include('layouts.backend.includes.datatable_script')
@endpush

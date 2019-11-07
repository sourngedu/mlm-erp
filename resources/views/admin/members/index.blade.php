{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.backend.ace_layout')

@section('title', '| Manage Member')

@section('content')
		<div class="col-xs-12 ">
			@include('admin.members.includes.buttons')
		</div>

	@include('admin.members.includes.table')

@endsection

@push('js')
	@include('layouts.backend.includes.datatable_script')
@endpush

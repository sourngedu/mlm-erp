{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.backend.ace_layout')

@section('title', '| Users')

@section('content')

	    <div class="col-xs-12 ">
			@include('admin.users.includes.buttons')
		</div>

	@include('admin.users.includes.table')

@endsection

@push('js')
	@include('layouts.backend.includes.datatable_script')
@endpush

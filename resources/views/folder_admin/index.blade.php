@extends('layouts.app')
@section('admin')
    active
@endsection
@section('content')
<h1>Daftar admin</h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode admin</th>
				<th>Nama admin</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
@endsection
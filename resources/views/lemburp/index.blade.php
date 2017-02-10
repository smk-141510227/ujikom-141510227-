@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
<h1><center>Daftar Lembur Pegawai</center></h1>
<center><a  href="{{url('lemburp/create')}}" class="btn btn-primary"><span class="fa fa-plus-circle"></span><br>Tambah</center></a>
<hr></hr>
	<table border="1" class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="bg-success">
				<th>Lembur Ke-</th>
				<th>Nama Pegawai</th>
				<th>Kode Kategori Lembur</th>
				<th>Jumlah Jam</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($lembur as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>{{$data->kategori->kode_l}}</td>
				<td>{{$data->Jumlah_jam}}</td>
				<td>
					<a href="{{route('lemburp.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['lemburp.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection
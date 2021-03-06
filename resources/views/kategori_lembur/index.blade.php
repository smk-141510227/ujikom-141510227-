@extends('layouts.app')
@section('kategori')
    active
@endsection
@section('content')
<div class="panel panel-primary">
                <div class="panel-heading"></div>
                <div class="panel-body">
                <h1><center>Daftar Kategori Lembur</center></h1>
                <center><a  href="{{url('kategori/create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span><br>Tambah</a></center>
                <hr>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class="bg-success">
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($kategori as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_l}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td><?php echo 'RP.'.number_format($data->besar_uang,2,",",".");?></td>
				<td>
					<a href="{{route('kategori.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection
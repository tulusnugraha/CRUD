@extends('layout')
@section('judul')
Detail Tugas
@endsection
@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Dibuat tgl</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$data->judul}}</td>
			<td>{{$data->deskripsi}}</td>
			<td>{{$data->created_ad}}</td>
		</tr>
	</tbody>
</table>
@endsection
@extends('layout')
@section('judul')
Daftar Tugas
@endsection
@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>Judul</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $a)
			<tr>
				<td>{{$a->judul}}</td>
				<td>
					<a href="{{ url('tugas/'.$a->id) }}" class="btn btn-primary">
					<i class="glyphicon glyphicon-eye-open"></i></a>
				</td>
				<td>
					<a href="{{ url('tugas/'.$a->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
			</tr>
		@endforeach
	</tbody>
</table>	
@endsection
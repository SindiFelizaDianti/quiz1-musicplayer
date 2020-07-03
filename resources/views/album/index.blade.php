@extends('layouts.app')

@section('content')

<div class="container">
<center>
	<h3><b>Daftar Album</b></h3>
	<a href="{{ url('album/create') }}">Tambah Data Album</a></center>
	<table width="200px" border="2" cellpadding="20" cellspacing="10"  align="center"> 
		<tr bgcolor="ffb6c1">
			<td> ID ARTIST </td>
			<td> NAMA ALBUM </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->album_name }}</td>
			<td><a href="{{url('album/'.$row->album_id.'/edit')}}"> EDIT </a></td>
			<td>
				<form action="{{url('album/'.$row->album_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button> HAPUS </button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
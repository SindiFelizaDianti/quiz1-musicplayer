@extends('layouts.app')

@section('content')

<div class="container">
<center>
	<h3><b>Daftar Track</b></h3>
	<a href="{{ url('track/create') }}">Tambah Data Track</a></center>
	<table width="300px" border="2" cellpadding="30" cellspacing="10"  align="center"> 
		<tr bgcolor="ffb6c1">
			<td> NAMA TRACK </td>
			<td> ARTIS ID </td>
			<td> ALBUM ID </td>
			<td> TIME </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->track_name }} </td>
			<td> {{ $row->artist_id }} </td>
			<td> {{ $row->album_id }} </td>
			<td> {{ $row->time }} </td>
			<td><a href="{{url('track/'.$row->track_id.'/edit')}}"> EDIT </a></td>
			<td>
				<form action="{{url('track/'.$row->track_id)}}" method="POST">
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
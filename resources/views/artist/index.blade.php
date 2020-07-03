@extends('layouts.app')

@section('content')

<div class="container">
<center>
	<h3><b>Daftar Artist</b></h3>
	<a href="{{ url('artist/create') }}">Tambah Data Artist</a></center>
<table width="200px" border="2" cellpadding="20" cellspacing="10"  align="center"> 
		<tr bgcolor="ffb6c1">
			<td> NAMA </td>
			<td> EDIT </td>
			<td> HAPUS </td>
		</tr>

		@foreach($rows as $row);

		<tr>
			<td> {{ $row->artist_name }} </td>
			<td><a href="{{url('artist/'.$row->artist_id.'/edit')}}"> Edit </a></td>
			<td>
				<form action="{{url('artist/'.$row->artist_id)}}" method="POST">
					<input name="_method" type="hidden" value="DELETE">
					@csrf
					<button> Hapus </button>
				</form>
			</td>
		</tr>

		@endforeach
	</table>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
<center>
<h3><b>Tambah Data Album</b></h3>
<a href="{{ url('album') }}">Data Album</a></center>
<form action="{{ url('/album') }}" method="POST">
@csrf
		<table width="200px" border="2" cellpadding="20" cellspacing="10" bgcolor="ffb6c1" align="center"> 
	<tr>
		<td>ARTIST</td>
		<td><input type="text" name="artist_id"></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><input type="text" name="album_name"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="SIMPAN"></td>
	</tr>
</table>
</form>
</div>

@endsection
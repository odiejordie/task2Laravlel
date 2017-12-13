@extends('layout.template')
@section('konten')
<!-- ISI PROFILE -->
<div class="row" style="margin-top:20px">
	<!-- NAMA DAN FOTO -->
	<div class="col-sm-4">
		<h1>Uray Jordi Lasardi</h1>
		<img src="gambar/pp.jpg" style="border-radius:50%; max-width: 100px; max-height: 100px;">
	</div>

	<!-- TABEL -->
	<div class="col-sm-8">
		<table class="table table-striped" width="100%">
			<tr>
				<td>Nama</td>
				<td>Uray Jordi Lasardi</td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>Bandung 04 Mei 1996</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>Pria</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>Komplek GBI Blok E5 No.28</td>
			</tr>
		</table>
	</div>
</div>
@stop
@extends('layout.template')
@section('konten')
<!-- KORSEL GAMBAR -->
<div id="korsel" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
    	<li data-target="#korsel" data-slide-to="0" class="active"></li>
    	<li data-target="#korsel" data-slide-to="1"></li>
  	</ol>


  	<div class="carousel-inner" style="border-bottom-right-radius: 20px">
	    <div class="carousel-item active" style="max-height:400px;">
	      	<img class="d-block w-100" src="{{ asset('gambar/1.jpg') }}" alt="First slide">
	      	<div class="carousel-caption d-none d-md-block">
			    <h3>Kucing BT di kota Bandung</h3>
			</div>
	    </div>
	    <div class="carousel-item" style="max-height:400px;">
	      	<img class="d-block w-100" src="{{ asset('gambar/2.jpg') }}" alt="Second slide">
	      	<div class="carousel-caption d-none d-md-block">
			    <h3>Kucing mandi di kota Bandung</h3>
			</div>
	    </div>
	</div>


	<a class="carousel-control-prev" href="#korsel" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
  	<a class="carousel-control-next" href="#korsel" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>


<div class="row" style="margin-top:20px">
	<!-- KONTEN HOME -->
	<div class="col-sm-8">
		<p>
			Hello saya Odie dan saya ini akan lulus dari kuliah, <br>salam kenal ya. Berikut contoh dari hasil design grafik<br>
			yang saya buat :).
		</p>
	</div>

	<!-- KONTEN ALAMAT -->
	<div class="col-sm-4">
		<table border="0" width="100%">
			<tr>
				<td>Facebook</td>
				<td>:</td>
				<td>odiejordie</td>
			</tr>
			<tr>
				<td>Twitter</td>
				<td>:</td>
				<td>@urayjordi</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td>0822 4020 6775</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>Komp GBI Blok E5 No.28</td>
			</tr>
		</table>
	</div>
</div>
@stop
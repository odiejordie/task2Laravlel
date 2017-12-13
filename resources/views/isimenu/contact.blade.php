@extends('layout.template')
@section('konten')
<!-- ISI PROFILE -->
<div class="row" style="margin-top:20px">
	<!-- NAMA DAN FOTO -->
	<div class="col-sm-4">
		<h1>Uray Jordi Lasardi</h1>
		<img src="{{ asset('gambar/pp.jpg') }}" style="border-radius:50%; max-width: 100px; max-height: 100px;">
	</div>

	<!-- FORM -->
	<div class="col-sm-8">
		{!! Form::open(array('route' => 'pesan.store')) !!}
		  	<div class="form-group row">
		    	{!! Form::label('email', 'Email', array('class' => 'col-sm-2 col-form-label')) !!}
			    <div class="col-sm-10">
			      	{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email anda')) !!}
			      	<div class="text-danger">{{ $errors->first('email') }}</div>
			    </div>
		  	</div>
			<div class="form-group row">
			    {!! Form::label('pesan', 'Message', array('class' => 'col-sm-2 col-form-label')) !!}
			    <div class="col-sm-10">
				    {!! Form::textarea('pesan', null, array('class' => 'form-control', 'rows' => '10', 'placeholder' => 'Pesan anda')) !!}
				    <div class="text-danger">{{ $errors->first('pesan') }}</div>
			    </div>
			</div>
		  
			<div class="form-group row">
			    <div class="col-sm-10">
			     	{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
			    </div>
			</div>
		{!! Form::close() !!}
	</div>
</div>
@stop
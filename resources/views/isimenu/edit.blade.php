@extends('isimenu.pesan')
@section('detail')
<h1>Edit Pesan</h1>
{{-- {{ Form::open(array('route' => array('pesan.update' => $detail->id), 'method' => 'put', 'role' => 'form')) }} --}}
{{-- {{ Form::model($detail, ['route' => ['pesan.update' => $detail->id], 'method' => 'put', 'role' => 'form']) }} --}}
{{ Form::open(['route' => ['pesan.update', $detail->id]]) }}
{{ method_field('PUT') }}
<div class="row">
	<div class="col-sm-3">
		Email
	</div>
	<div class="col-sm-9">
		{{ Form::email('email', $detail->email, array('class' => 'form-control')) }}
		<div class="text-danger">{{ $errors->first('email') }}</div>
	</div>
</div>
<div class="row" style="margin-top: 20px">
	<div class="col-sm-3">
		Message
	</div>
	<div class="col-sm-9">
		{{ Form::textarea('pesan', $detail->pesan, array('class' => 'form-control', 'row' => '10')) }}
		<div class="text-danger">{{ $errors->first('pesan') }}</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12" style="margin-top: 20px">
		{{ Form::submit('Edit', array('class' => 'btn btn-primary btn-block')) }}
	</div>
</div>
{{ Form::close() }}
@endsection
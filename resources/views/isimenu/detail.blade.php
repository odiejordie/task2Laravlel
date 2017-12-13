@extends('isimenu.pesan')
@section('detail')
<h1>Detail Pesan</h1>
<div class="row">
	<div class="col-sm-4">
		Email
	</div>
	<div class="col-sm-8">
		{{ $detail->email }}
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		Message
	</div>
	<div class="col-sm-8">
		{{ $detail->pesan }}
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		Created at
	</div>
	<div class="col-sm-8">
		{{ $detail->created_at }}
	</div>
</div>
@endsection
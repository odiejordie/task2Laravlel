@extends("layout.template")
@section("konten")
<h1>Pesan Pesan</h1>
<table class="table table-stripped">
<thead>
	<tr>
		<th>Email</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	@foreach($data as $row)
	<tr>
		<td>{{ $row->email }}</td>
		<td>{{ $row->pesan }}</td>
		<td>
			{{ link_to(route('pesan.show', array($row->id)), 'Detail', array('class' => 'btn btn-success')) }}
			{{ link_to(route('pesan.edit', array($row->id)), 'Edit', array('class' => 'btn btn-info')) }}
			{{ link_to(url('delete', array($row->id)), 'Delete', array('class' => 'btn btn-danger')) }}
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@yield('detail')
@endsection
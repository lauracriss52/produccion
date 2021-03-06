@extends('layouts.master')
@section('contenido')
	@if(sizeof($oauth_clients) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Secreto</th>
					<<th>Nombre</th>
					<th>created</th>
                    <th>updated</th>
				</tr>
			</thead>
			<tbody>
				@foreach($oauth_clients as $oauth_clients)
				<tr>
					<td>{{$oauth_clients->id}}</td>
					<td>{{$oauth_clients->secret}}</td>
					<td>{{$oauth_clients->name}}</td>
					<td>{{$oauth_clients->created_at}}</td>
                    <td>{{$oauth_clients->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay usuarios en este momento
		</div>

		@endif
@endsection
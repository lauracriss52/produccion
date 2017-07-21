@extends('layouts.master')

@section('contenido')		
		
			<form action="{{url('/usuariocliente/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Usuario</legend>
	
			<div class="form-group">
				<label for="">Id</label>
				<input type="number" class="form-control" name="id" required>
			</div>
            
			<div class="form-group">
				<label for="">Secreto</label>
				<input type="text" class="form-control" name="secret" required>
			</div>
            
            <div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="name" required>
			</div>
            
		
     
			<button type="submit" class="btn btn-primary">Crear Usuario</button>
		</form>

@endsection
@extends('plantillas.plantilla1')

@section ('titulo', 'Nueva Carrera')

@section ('contenido')


<div class="row">
	<div class="col">
		<br><br><br>
		<h2>Lista de carreras</h2>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Logo</th>
				<th>Nombre</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>

@foreach($carreras as $carrera)

<tr>
	<td>{{$carrera->numero}}</td>

	<td><img width="100px" height="100px" src="{{asset('/img/'.$carrera->logo)}}"></td>

	<td>{{$carrera->nombre}}</td>
<td>	<button type="submit" class="btn btn-primary">Editars</button></td>
<td>	<button type="submit" class="btn btn-danger">Eliminar</button></td>


		
	
</tr>
@endforeach
		</table>		
	</div>
</div>

@endsection
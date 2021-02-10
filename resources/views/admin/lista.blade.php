@extends('adminlte::page')

@section('title', 'Lista de Productos')

@extends('layouts.admin')
@section('content_header')

<h1 class="text-center text-capitalize text-primary bg-dark py-2">listado de Productos</h1>
@stop

@section('content')

<div class="container">
@if(Session::has('modificar'))

<div class="alert alert-success">
    <a href="{{route('admin.lista')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Modifico!</strong> {{session('modificar')}}
  </div>

@endif
@if(Session::has('guardar'))

<div class="alert alert-primary">
    <a href="{{route('admin.lista')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>guardo!</strong> {{session('guardar')}}
  </div>

@endif
@if(Session::has('eliminar'))

<div class="alert alert-danger">
    <a href="{{route('admin.delete')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Elimino!</strong> {{session('eliminar')}}
  </div>

@endif
</div>

<div>
<div class="col col-3 float-right shadow">
@auth
@if(auth()->user()->hasRol(['Administrador']))
	<a href="{{route('admin.agregar')}}" class="btn btn-block btn-warning mb-3">Agregar Producto</a>
@endif
@endauth
	</div>
	<table class="table">
		<thead class="table-dark">
			<tr>
				<th class="text-center" scope="col">Código</th>
				<th class="text-center" scope="col">Nombre</th>
				<th class="text-center" scope="col">Precio</th>
				<th class="text-center" scope="col">Stock</th>
				<th class="text-center" scope="col">Categoria</th>
				<th class="text-center" scope="col">Creado</th>
				<th class="text-center">Acciones</th>
			</tr>
		</thead>

		<tbody>
@foreach($producto as $prod)

	<tr class="border border-danger">

	<td class="text-center">{{$prod->id}}</td>
	
	<td class="text-capitalize">{{$prod->nombre_Prod}}</td>
	
	<td class="text-center">{{$prod->precio}}$</td>
	
	<td class="text-center">{{$prod->stock}}</td>
	
	<td class="text-center">{{$prod->categoria}}</td>
	
	<td class="text-center text-capitalize">{{$prod->created_at->diffforHumans()}}</td>
	<td>
	<a href="{{route('admin.detalle', $prod)}}" class="btn btn-info">Ver Detalle</a>
@auth
@if(auth()->user()->hasRol(['Administrador']))
	<a href="{{route('admin.editar', $prod)}}" class="btn btn-success">Editar</a>

	<a href="{{route('admin.delete', $prod)}}" class="btn btn-danger" onclick="confirm('¿Desea Eliminar?')">Eliminar</a>
@endif
@endauth
			</td>
			</tr>
@endforeach
		</tbody>
	</table>
	{{$producto->links()}}
<!--
	<div class="card float-right" style="width: 40rem;">
<div class="card-body badge-pill">
<div class="d-flex justify-content-center">
<div>
<p class="card-text font-italic mr-4 border-bottom border-dark pb-2">Generar Reporte PDF de todo el registro de Productos</p>
</div>
	<a href="" class="btn btn-danger badge-pill">Obtener en PDF</a>

</div>
</div>
</div>
-->
</div>
@stop

@section('css')

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  
<link rel="stylesheet" type="text/css" href="{{asset('dist/css/adminlte.css')}}">
@stop 

@section('js')
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

@stop
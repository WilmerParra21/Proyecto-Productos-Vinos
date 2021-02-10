@extends('adminlte::page')

@section('title', 'Detalle del Producto')

@extends('layouts.admin')

@section('content_header')

<h1 class="text-center text-capitalize text-dark p-2 shadow" style="background-color: yellow; font-family: Georgia, serif;">Detalle del Producto</h1>
@stop

@section('content')

<div class="container-fluid border border-dark">

<ul class="list-unstyled m-3">

	<li class="">Nombre: <strong class="text-danger font-weight-bold">{{$producto->nombre_Prod}}</strong></li>

	<li class="">Descripción: <strong class="text-danger font-weight-bold">{{$producto->descripcion}}</strong></li>

	<li class="">Precio: <strong class="text-success font-weight-bold">{{$producto->precio}}$</strong></li>

	<li class="">Stock: <strong class="text-danger font-weight-bold">{{$producto->stock}}</strong></li>

	<li class="">Categoria: <strong class="text-danger font-weight-bold">{{$producto->categoria}}</strong></li>

	<li class=" text-capitalize mt-4">Fecha de Creación: <strong class="text-danger font-weight-bold">{{$producto->created_at}}</strong></li>

	<li class="text-capitalize">Fecha de Actualización: <strong class="text-danger font-weight-bold">{{$producto->updated_at}}</strong></li>
</ul>

<div class="m-4 py-2">
		<a href="{{route('admin.lista')}}" class="btn btn-outline-dark">volver</a>
	</div>
	
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

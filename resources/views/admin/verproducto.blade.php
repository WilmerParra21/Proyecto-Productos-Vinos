@extends('adminlte::page')

@section('title', 'Producto')

@section('content_header')

<h1 class="text-center text-capitalize text-light p-2 shadow" style="background-color: black; font-family: Georgia, serif;">{{$producto->nombre_Prod}}</h1>
@stop

@section('content')
<div style="background-image: url('../img/fond-1.jpg');
	background-attachment: fixed;
	background-size: cover;
">
<div class="container-fluid border border-dark" style="background-color: rgba(255, 255, 255, .6);">
<div class="d-flex">
<ul class="list-unstyled m-3 mt-5">

	<li class="m-2"><i class="fas fa-file-alt mr-2"></i> Descripción: <strong class=" font-weight-bold font-italic">{{$producto->descripcion}}</strong></li>

	<li class="m-2"><i class="fas fa-coins mr-2"></i>
 Precio: <strong class="font-weight-bold">{{$producto->precio}}$</strong></li>

	<li class="m-2"><i class="far fa-heart mr-2"></i>
	 Stock: <strong class="font-weight-bold">{{$producto->stock}}</strong></li>

	<li class="m-2 pb-4 border-bottom border-dark"><i class="far fa-address-card mr-2"></i> Categoria: <strong class="font-weight-bold">{{$producto->categorias->nombre}}</strong></li>

</ul>

<img src="{{asset(Storage::url($producto->imagen))}}" width="280" class="mt-2 mr-5 img-fluid shadow" alt="Imagen-Vino">
</div>
<p class="mt-2 mr-5 text-primary font-weight-bold float-right">Viñedo<strong class=" font-italic text-light">Coste</strong></p>

		<a href="{{route('admin.index')}}" class="ml-3 mb-5 btn btn-outline-dark px-4 text-light">Volver</a>
	</div>
	</div>
</div>

@stop

@section('css')

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  
<link rel="stylesheet" type="text/css" href="{{asset('dist/css/adminlte.css')}}">
@stop

@section('js')

<script src="{{asset('js/all.min.js')}}"></script>

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

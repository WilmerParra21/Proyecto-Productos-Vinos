@extends('adminlte::page')

@section('title', 'Editar Producto')

@extends('layouts.admin')

@section('content_header')

<h1 class="text-center text-capitalize text-light p-2 shadow bg-primary" style="font-family: Georgia, serif;">Editar Producto</h1>
@stop

@section('content')
<section class="border-bold p-3 mt-0" style="background-color: black;">

<form class="m-1 mt-4" method="POST" action="{{route('admin.actualizar', $producto)}}" enctype="multipart/form-data" accept-charset="utf-8">

@csrf @method('PUT')
<div class="d-flex m-2 border-bottom border-light">
  <label for="nombre_Prod" class="font-italic font-weight-bold text-light">Nombre: </label>
<input type="text" name="nombre_Prod" id="nombre_Prod" value="{{$producto->nombre_Prod}}" class="form-control ml-5 mb-2">

{!! $errors->first('nombre_Prod', '<small>:message</small><br>') !!}
</div>

<div class="d-flex m-2 border-bottom border-light">
  <label for="descripcion" class="font-italic font-weight-bold text-light">Descripción: </label>
<input type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}" class="ml-4 mb-2 form-control">

{!! $errors->first('descripcion', '<small>:message</small><br>') !!}
</div>

<div class="d-flex justify-content-between">

<div>
	
<div class="d-flex m-2 pb-3 border-bottom border-light">
	<label for="precio" class="font-italic font-weight-bold mr-4 text-light">Precio: </label>
<input type="text" name="precio" id="precio" value="{{$producto->precio}}" class="ml-1 form-control" min="5">

{!! $errors->first('precio', '<small>:message</small><br>') !!}
</div>

<div class="d-flex m-2 pb-3 border-bottom border-light">
	<label for="stock" class="font-italic font-weight-bold mr-2 text-light">Stock: </label>
<input type="number" name="stock" id="stock" value="{{$producto->stock}}" class="form-control ml-4" min="10" max="10000">
{!! $errors->first('stock', '<small>:message</small><br>') !!}
</div>

<div class="d-flex m-2 border-bottom border-light">
  <label for="categoria" class="font-italic font-weight-bold text-light">Categoria: </label>
<input type="text" name="categoria" id="categoria" value="{{$producto->categoria}}" class="form-control ml-2 mb-2">

{!! $errors->first('categoria', '<small>:message</small><br>') !!}
</div>
<br>
<p class="text-light text-center border-bottom border-primary">Ingrese una imagen del Poducto</p>
<input type="file" class="form-control-file btn btn-dark border border-light" name="imagen">

</div>

<div>
<img src="{{asset('storage').'/'.$producto->imagen}}" width="280" class="img-fluid">
</div>
</div>
<div class="d-flex justify-content-end m-2 mt-3">

<a href="{{route('admin.lista')}}" class="btn btn-outline-danger m-3 px-3">Cancelar</a>
<!--
<input type="reset" name="" class="btn btn-outline-danger m-3 px-3" value="Cancelar">
-->
<input type="submit" class="btn btn-outline-primary m-3 px-3" name="" value="Actualizar Datos">
</div>
</form>
</section>
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
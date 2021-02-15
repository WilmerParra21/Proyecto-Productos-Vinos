@extends('adminlte::page')

@section('title', 'ViñedoCoste')
@extends('layouts.admin')

@section('content_header')

<h1 class="text-center text-capitalize border-bottom border-dark bg-purple p-2 shadow">Productos disponibles</h1>

@stop

@section('content')

<div class="container-xl mt-3">

<h3 class="text-left text-capitalize text-light py-2 pl-3" style="background-color: black; border-radius: 5px;">Vinos más solicitados</h3>

<section class="d-flex justify-content-center">

@foreach($producto as $prod)
@if($prod->categorias->nombre != "Exclusivos")
<article class="card w-100 m-2 border border-dark">
<div class="d-flex justify-content-between">
      
  <img src="{{asset(Storage::url($prod->imagen))}}" width="190" class="d-block img-fluid" width="148" alt="Producto">

    <div class="text-center pt-5 mr-4">
<p class="mb-2 text-muted text-uppercase font-weight-bold small">{{$prod->nombre_Prod}}</p>

<h5 class="mb-0"><span class="badge bg-purple badge-pill">{{$prod->precio}}$</span></h5>

<div class="mt-3">
<a href="{{route('admin.verproducto', $prod)}}" class="btn btn-primary">Ver Producto</a>

<a href="#" class="btn btn-success m-2 px-4">Comprar</a>
</div>

<div class="card-footer bg-white mt-5">
	<small class="text-primary font-weight-bold ml-4">Viñedo<span class="text-dark font-italic">Coste</span></small>
</div>
</div>
    </div>
</article>
@endif
@endforeach
</section>
{{$producto->links()}}

@foreach($producto as $prod)

@if($prod->categorias->nombre == "Exclusivos")

<h3 class="text-center text-capitalize text-danger py-2 pl-3" style="background-color: black; border-radius: 5px">destacados</h3>

<section class="d-flex justify-content-center" style="background-color: black">
<article class="card w-100 m-2 border border-light bg-transparent">
<div class="d-flex justify-content-between">
      <img src="{{asset(Storage::url($prod->imagen))}}" width="500" class="d-block img-fluid" width="148" alt="...">
      <div class="text-center pt-5 mr-4">

<p class="mb-2 text-uppercase font-weight-bold small text-danger">{{$prod->nombre_Prod}}</p>
<h5 class="mb-0"><span class="badge bg-purple badge-pill">{{$prod->precio}}$</span></h5>

<div class="mt-3">
<a href="{{route('admin.verproducto', $prod)}}" class="btn btn-primary">Ver Producto</a>

<a href="#" class="btn btn-success m-2 px-4">Comprar</a>
</div>

<div class="card-footer mt-5">
	<small class="text-primary font-weight-bold ml-4">Viñedo<span class="text-light font-italic">Coste</span></small>
</div>
</div>
    </div>
</article>
</section>
@endif
@endforeach
</div>

@stop 

@section('footer')
  <!-- Main Footer -->
  <footer class="main-footer">
<div class="d-flex">
    <p class="text-primary font-weight-bold mr-3">Viñedo<strong class="text-dark font-italic">Coste</strong></p>
    <strong>Copyright &copy; 2021 <a href="#">Wilmer Parra</a>.</strong>
    </div>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
@stop

@section('css')

  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
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
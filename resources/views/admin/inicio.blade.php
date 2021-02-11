@extends('adminlte::page')

@section('title', 'ViñedoCoste')
@extends('layouts.admin')

@section('content_header')

<h1 class="text-center text-capitalize border-bottom border-dark bg-purple p-2">Productos disponibles</h1>
@stop

@section('content')

<p class="p-4 shadow"></p>

<div class="container-xl">

<h3 class="text-left text-capitalize text-light py-2 pl-3" style="background-color: black; border-radius: 5px;">Vinos más solicitados</h3>

<section class="d-flex justify-content-center">
    
@foreach($producto as $prod)
<article class="card w-100 m-2 border border-dark">
<div class="d-flex justify-content-between">
      
  <img src="{{asset('storage').'/'.$prod->imagen}}" width="190" class="d-block img-fluid" width="148" alt="Producto">

    <div class="text-center pt-5 mr-4">
<p class="mb-2 text-muted text-uppercase font-weight-bold small">{{$prod->nombre_Prod}}</p>

<h5 class="mb-0"><span class="badge bg-purple badge-pill">{{$prod->precio}}$</span></h5>

<div class="mt-3">
<a href="{{route('admin.verproducto', $prod)}}" class="btn btn-primary">Ver Producto</a>

<a href="#" class="btn btn-success m-2 px-4">Comprar</a>
</div>

<div class="card-footer mt-5">
	<small class="text-primary font-weight-bold ml-4">Viñedo<span class="text-dark font-italic">Coste</span></small>
</div>
</div>
    </div>
</article>
@endforeach

</section>
{{$producto->links()}}


<h3 class="text-center text-capitalize text-danger py-2 pl-3" style="background-color: black; border-radius: 5px">destacados</h3>

<section class="d-flex justify-content-center" style="background-color: black">
<article class="card w-100 m-2 border border-light bg-transparent">
<div class="d-flex justify-content-between">
      <img src="{{asset('img/productos/Wine_Black_background_Bottle_Stemware_512316_2560x1846.jpg')}}" width="500" class="d-block img-fluid" width="148" alt="...">
      <div class="text-center pt-5 mr-4">

<p class="mb-2 text-uppercase font-weight-bold small text-danger">Vino de Cereza</p>
<h5 class="mb-0"><span class="badge bg-purple badge-pill">45$</span></h5>

<div class="mt-3">
<a href="#" class="btn btn-primary">Ver Producto</a>

<a href="#" class="btn btn-success m-2 px-4">Comprar</a>
</div>

<div class="card-footer mt-5">
	<small class="text-primary font-weight-bold  ml-4">Viñedo<span class="text-light font-italic">Coste</span></small>
</div>
</div>
    </div>
</article>
</section>

</div>
</div>

<div class="">
    <ul class="table">
        <li><a class="" href="#"> </a></li>
    </ul>
</div>
@stop 

@section('content_footer')
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
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
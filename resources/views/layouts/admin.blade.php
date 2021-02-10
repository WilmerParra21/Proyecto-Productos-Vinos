<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'ViñedoCoste')</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('admin.index')}}">Inicio</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('admin.lista')}}">Productos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="#">Solicitar</a>
      </li>
    </ul>
    <h3 class="text-primary font-italic font-weight-bolder" style="font-family: 'Georgia', serif; margin-right: 8rem;">Viñedo<strong class="text-light">Coste</strong></h3>
    <ul class="nav navbar-nav navbar-right">
    @guest
    <li><a class="nav-link text-light mr-2" href="{{route('register')}}">Registrarse</a></li>
    @endguest

    @guest
    <li><a class="nav-link text-light mr-2" href="{{route('login')}}">Iniciar Sesión</a></li>
    @else
    <li class="nav-item active mr-2"><a class="nav-link text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
    @endguest

    <li class="nav-item active">
    @auth
    <a class="nav-link text-success" href="#">Bienvenido {{auth()->user()->name}}</a>
    @endauth
    </li>
    </ul>
  </div>
</nav>
<form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
@csrf
</form>

@yield('contenido')
</body>
</html>
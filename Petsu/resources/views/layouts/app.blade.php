<!doctype html>
<html lang="es">

  <!-- Head -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    {!! Html::style('assets/css/styles.css') !!}
    {!! Html::style('assets/css/erros.css') !!}
    <title>@yield('title')</title>
  </head>

  <!-- Body -->
  <body>
  <!-- Header-Nav -->
<nav class="navbar navbar-dark bg-dark ">
  <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{asset('assets/img/logo.jpg')}}"  class="d-inline-block align-top logo" alt="">
  </a>
  <span class="navbar-text mx-auto text-center text-white">
  <h1 class="display-5">@yield('nav-title')</h1>
  </span>

  <ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a  class = "btn btn-light"href="{{ url('/login') }}">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              @if(Auth::user()->name == "admin")
            <li><a href="{{url('admin')}}">Admin</a></li>
            @endif
                <li><a href="{{ url('users/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
    @endif
</ul>
</nav>

<!-- Principal section -->
<div class="container mb-8 mt-3">     
    @yield('content')
</div>

<!-- Paginate -->
<div class = "container mb-5">
  @yield('paginate')
</div>

<!-- Footer -->
<footer id="sticky-footer" class="py-2 bg-dark text-white-50 fixed-bottom">
    <div class="container text-center">
      <small>Copyright &copy; Petsu</small>
    </div>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
     integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- Validation scripts -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    @yield('validate')
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OldCar-Imports</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link res="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-collapse collapse">
    <a class="navbar-brand" href="{{route('home')}}">OldCar Import</a>
  <div class="navbar-expand mr-auto">
    @if(Request::session()->exists('loggedIn'))
    <div class="navbar-nav">
    <a class="nav-item nav-link" href="{{route('clients.index')}}">Clientes</a>
      <a class="nav-item nav-link" href="{{route('colaboradores.index')}}">Colaboradores</a>
      <a class="nav-item nav-link" href="{{route('veiculos.index')}}">Veiculos</a>
      <a class="nav-item nav-link" href="{{route('vendas.index')}}">Vendas</a>
    </div>
    @endif
  </div>
  <div class="navbar-expand ml-auto navbar-nav">
    <div class="navbar-nav">
      @if(Request::session()->exists('loggedIn'))
    <a  class="nav-item nav-link"  href="{{route('users.logout')}}">Logout</a>
      @else
    <a  class="nav-item nav-link"  href="{{route('users.get.login')}}">Login</a>
      @endif
    </div>
  </div>
</nav>

@yield('content')

<nav class="navbar navbar-dark bg-dark mt-5 fixed-bottom">
  <div class="navbar-expand m-auto navbar-text">
    
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
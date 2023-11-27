@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Panel de Administración</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#usuarios">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#productos">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#categorias">Categorías</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-4">
  <div class="row">
    <div class="col-sm-4 mt-4 text-center" >
      <h2>Usuarios</h2>
      <a href="{{route('users.index')}}">
        <img src="{{asset('images/Modulos/users.png') }}" alt="Imagen de Usuarios" class="img-fluid border border-dark ">
      </a>
    </div>

    <div class="col-sm-4 mt-4 text-center">
      <h2>Productos</h2>
      <a href="{{route('products.index')}}">
        <img src="{{asset('images/Modulos/products.png') }}" alt="Imagen de Productos" class="img-fluid border border-dark">
      </a>
    </div>

    <div class="col-sm-4 mt-4 text-center">
      <h2>Categorías</h2>
      <a href="{{route('categories.index')}}">
        <img src="{{asset('images/Modulos/categories.jpg') }}" class="img-fluid border border-dark">
      </a>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="alert alert-info text-center">Tienda de Productos para Gimnasio</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('mancuernas')}}">Mancuernas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('barras')}}">Barras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('discos')}}">Discos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('bancos')}}">Bancos</a>
      </ul>
    </div>

    @foreach($products as $product)
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="ruta/de/la/imagen1.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$product->product_name}}</h5>
              <p class="card-text">{{$product->product_description}}</p>
              <p class="card-text">${{$product->product_price}}</p>
              <a href="" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach


    <footer>
      <p>&copy; 2023 Tienda de Productos de Gimnasio. Todos los derechos reservados.</p>
    </footer>
    @endsection
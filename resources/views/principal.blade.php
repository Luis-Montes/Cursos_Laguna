@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/Carrusel/01.jpeg')}}" class="d-block w-50 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/Carrusel/02.jpeg')}}" class="d-block w-50 mx-auto" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/Carrusel/03.jpeg')}}" class="d-block w-50 mx-auto" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
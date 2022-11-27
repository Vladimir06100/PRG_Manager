@extends('base')
  @section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
      <section class="section">
        <div class="container">
          <div class="row">

{{-- affichage personnage --}}
          {{-- affichage du nom de user avec qui il ya une liason avec bd, personnage correspend aux id users --}}
          

  <div class="album bg-light">
    <div class="container"> 
      @foreach ($personnages as $personnage)
      <div class="row row-cols-3 row-cols-sm-3 row-cols-sd-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{ $personnage->image }}" width="200" alt="image">
            <div class="card-body">
              <p class="card-text text-center">Description :{{ $personnage->description }}</p>
              <h5 class="card-title text-center">{{ $personnage->nom }}</h5>  
              <p class="card-text text-center">{{ $personnage->specialite }}</p>
              <p class="card-text text-center">{{ $personnage->magie }}</p>
              <p class="card-text text-center">{{ $personnage->force }}</p>
              <p class="card-text text-center">{{ $personnage->agilite }}</p>
              <p class="card-text text-center">{{ $personnage->intelligence }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Specialite : {{ $personnage->specialite }}</small>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>


  
  @endforeach
  @endsection

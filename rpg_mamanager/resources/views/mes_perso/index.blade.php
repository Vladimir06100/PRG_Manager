@extends('base')
@section('title', 'Connexion')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">Mes personnages</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p class="text-center">Bonjour {{ auth()->user()->pseudo }}</p>
    </div>
  </div>
@foreach ($personnages as $personnage)
  <div class="card m-2">
      <div class="card-header">
        <h2 class="text-center">{{ $personnage->nom }}</h2>
        <h3 class="text-center">LEVEL : {{ $personnage->level }}</h3>
      </div>
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <p class="text-center">Description</p>
          <p>{{ $personnage->description }}</p>
          <p class="text-center">Caractéristique</p>
          <p>Magie : {{ $personnage->magie }}</p>
          <p>Force : {{ $personnage->force }}</p>
          <p>Agilite : {{ $personnage->agilite }}</p>
          <p>Intelligence : {{ $personnage->intelligence }}</p>
          <p>Vie : {{ $personnage->vie }}</p>
          <p>Classe : {{ $personnage->specialite }}</p>
        </div>
        <div class="col-6">
          <img src="{{ $personnage->image }}" alt="image du personnage" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-6">
            <p class="text-center">Créé le {{ $personnage->created_at }}</p>
        </div>
        <div class="col-6">
          <p class="text-center">Mis à jour le {{ $personnage->updated_at }}</p>
        </div>
      </div>
    </div>
      <div class="card-footer">
        <a href="{{ route('personnages.index') }}" class="btn btn-primary">Retour</a>
        <a href="{{ route('my_personnages.edit', $personnage->id) }}" class="btn btn-dark">Modifier votre Personnage</a>
        <form action="{{ route('my_personnages.destroy', $personnage->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger m-2">Supprimer votre Personnage</button>
      </div>
    </div>
  </div>
@endforeach
@endsection

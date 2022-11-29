@extends('base')
@section('title', 'Connexion')
@section('content')
{{-- affichage group --}}
<div class="container m-2">
  <a href="{{ route('groups.create') }}" class="btn btn-primary">Créer un nouveau groupe</a>
</div>
<div>
<h1>Voici le groupe {{ $group->name }}</h1>
  <div class="card m-5">
    <div class="card-header">
      <h2>Nom de votre groupe : {{ $group->name }}</h2>
    </div>
    <div class="row m-1">
      <div class="col-6">
        <p>Description du groupe : {{ $group->description }}</p>
      </div>
      <div class="col-12">
        <div class="col-5 m-1">
          {{-- edit a href--}}
          <a href="{{-- route('groups.edit', $group->id) --}}" class="btn btn-primary">Ajouter Membre</a>
        </div>
        <div class="col-6 m-1">
          <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer le groupe</button>
        </div>
      </div>
      <div class="col-12">
        <img src="{{ $group->image }}" alt="image du groupe">
      </div>
  </div>
</div>
@endsection
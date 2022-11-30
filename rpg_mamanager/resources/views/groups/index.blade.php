@extends('base')
@section('title', 'Connexion')
@section('content')
<div class="container m-2">
  <a href="{{ route('groups.create') }}" class="btn btn-primary">Créer un nouveau groupe</a>
</div>
<div>
<h1>Voici vos groupes</h1>
@foreach ($groups as $group)
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
          <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary">Voir le groupe</a>
        </div>
        {{-- show personnage in the group --}}
        <div class="col-5 m-1">
          <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary">Voir les personnages</a>
      </div>
      <div class="col-12">
        <img src="{{ $group->image }}" alt="image du groupe">
      </div>
  </div>
</div>
@endforeach

@endsection
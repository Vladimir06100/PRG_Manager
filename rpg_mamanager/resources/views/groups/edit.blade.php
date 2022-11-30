@extends('base')
@section('title', 'Connexion')
@section('content')

<h1>Ajoute Membre</h1>
{{-- ici creation de group avec votre id et invitation de autres utilisateurs via button --}}
{{-- sous forme dun formulaire --}}
<form action="{{ route('groups.update', $group->id) }}" method="POST">
  @csrf
  @method('PUT')
      @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
  <div class="form-group m-2">
    <label for="name">Nom du groupe</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $group->name }}"> 
  </div>
  <div class="form-group m-2">
    <label for="description">Description du groupe</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ $group->description }}</textarea>  
  </div>
  <div class="form-group m-2">
    <label for="image">Image du groupe</label>
    <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ $group->image }}">
  </div>
  <div class="form-group m-2">
    <label for="personnage_id1">Personnage 1</label>
    <input type="text" name="personnage_id1" id="personnage_id1" class="form-control @error('personnage_id1') is-invalid @enderror" value="{{ $group->personnage_id1 }}">
  </div>
  <div class="form-group m-2">
    <label for="personnage_id2">Personnage 2</label>
    <input type="text" name="personnage_id2" id="personnage_id2" class="form-control @error('personnage_id2') is-invalid @enderror" value="{{ $group->personnage_id2 }}">
  </div>
  <div class="form-group m-2">
    <label for="personnage_id3">Personnage 3</label>
    <input type="text" name="personnage_id3" id="personnage_id3" class="form-control @error('personnage_id3') is-invalid @enderror" value="{{ $group->personnage_id3 }}">
  </div>
  <div class="form-group m-2">
    <label for="personnage_id4">Personnage 4</label>
    <input type="text" name="personnage_id4" id="personnage_id4" class="form-control @error('personnage_id4') is-invalid @enderror" value="{{ $group->personnage_id4 }}">
  </div>
  <div class="form-group m-2">
    <label for="personnage_id5">Personnage 5</label>
    <input type="text" name="personnage_id5" id="personnage_id5" class="form-control @error('personnage_id5') is-invalid @enderror" value="{{ $group->personnage_id5 }}">
  </div> 
    <button type="submit" class="btn btn-primary m-2">Modifier</button>
  </div>
  


@endsection
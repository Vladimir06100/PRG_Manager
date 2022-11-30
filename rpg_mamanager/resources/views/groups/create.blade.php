@extends('base')
@section('title', 'Connexion')
@section('content')

<h1>Creation du Groupe</h1>
{{-- ici creation de group avec votre id et invitation de autres utilisateurs via button --}}
{{-- sous forme dun formulaire --}}
<form action="{{ route('groups.store') }}" method="POST">
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
  <div class="form-group">
    <label for="name">Nom du groupe</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
  </div>
  <div class="form-group">
    <label for="description">Description du groupe</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
  </div>
  <div class="form-group">
    <label for="image">Image du groupe</label>
    <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
  </div>
    <button type="submit" class="btn btn-primary m-2">Créer</button>
  </div>

  
@endsection
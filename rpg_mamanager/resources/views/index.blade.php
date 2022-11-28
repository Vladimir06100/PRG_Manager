@extends('base')
  @section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
    <h1 class="text-center">Personnage</h1>
      
    @foreach ($personnages as $personnage)
<div class="container m-1">
        <div class="row">
            <div class="col-12 m-1">
                {{-- personnage unique --}}
                {{-- foreach sur mes personnages --}}    
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">{{ $personnage->nom }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="text-center">LEVEL : {{ $personnage->level }}</h4>
                                <p class="text-center">Description</p>
                                <p>{{ $personnage->description }}</p>
                                <a href="{{ route('personnages.show', $personnage->id) }}" class="btn btn-primary">Détail</a>
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
            </div>
        </div>
    </div>
</div>


  
  @endforeach
  @endsection
 
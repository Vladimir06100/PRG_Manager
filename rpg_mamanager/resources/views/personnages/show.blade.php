@extends('base')
@section('title', 'Connexion')
@section('content')
{{-- affichage personnage --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Personnage</h1>
                
                {{-- affichage unique mes personnage --}}
                

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
                                <p class="text-center">Caracteristique</p>
                                <p>Magie : {{ $personnage->magie }}</p>
                                <p>Force : {{ $personnage->force }}</p>
                                <p>Agilite : {{ $personnage->agilite }}</p>
                                <p>Intelligence : {{ $personnage->intelligence }}</p>
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
                    {{-- button back page principale --}}
                    <div class="card-footer">
                        <a href="{{ route('personnages.index') }}" class="btn btn-primary">Retour</a>
                   
                    @if (session()->has('user'))
                   
                                <a href="{{ route('personnages.edit', $personnage->id) }}" class="btn btn-danger">Invite</a>
                            
                        </div>
                      @endif
            </div>
        </div>
    </div>
    @endsection

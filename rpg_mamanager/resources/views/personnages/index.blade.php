@extends('base')
@section('title', 'Connexion')
@section('content')
{{-- affichage personnage --}}
    <div class="container">
        <div class="row">
          @foreach ($personnages as $personnage)
            <div class="col-12">
                <h1 class="text-center">Personnage</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $personnage->nom }}</h5>  
                        <p class="card-text text-center">{{ $personnage->description }}</p>
                        <p class="card-text text-center">{{ $personnage->specialite }}</p>
                        <p class="card-text text-center">{{ $personnage->magie }}</p>
                        <p class="card-text text-center">{{ $personnage->force }}</p>
                        <p class="card-text text-center">{{ $personnage->agilite }}</p>
                        <p class="card-text text-center">{{ $personnage->intelligence }}</p>
                        <p class="card-text text-center">{{ $personnage->image }}</p>
                    </div>
                </div>
                {{-- button delete --}}
                <form action="{{ route('personnages.destroy', $personnage->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                {{-- button edit --}}
                <a href="{{ route('personnages.edit', $personnage->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
        @endforeach
    </div>


@endsection
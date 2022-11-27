@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
    {{-- ici on va cree un formulaire pour cree un personnage --}}
    <form action="{{ route('personnages.store') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        {{-- Nom --}}
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
        </div>
        {{-- description --}}
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
        </div>
        {{-- select one specialite parmis "Guerrier", "Mage", "Druide", "Assassin", "Berserker", "Archer". --}}
        <div class="form-group">
            <label for="specialite">Specialite</label>
            <select class="form-control" name="specialite" id="specialite">
                <option>Guerrier</option>
                <option>Mage</option>
                <option>Druide</option>
                <option>Assassin</option>
                <option>Berserker</option>
                <option>Archer</option>
            </select>
        </div>
        {{-- image --}}
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image">
        </div>
        {{-- generate random Number for magie force agilite intelligence --}}
        <div>
            <div class="form-group">
                <label for="magie">Magie</label>
                <input type="number" class="form-control" name="magie" id="magie" placeholder="Magie">
            </div>
            <div class="form-group">
                <label for="force">Force</label>
                <input type="number" class="form-control" name="force" id="force" placeholder="Force">
            </div>
            <div class="form-group">
                <label for="agilite">Agilite</label>
                <input type="number" class="form-control" name="agilite" id="agilite" placeholder="Agilite">
            </div>
            <div class="form-group">
                <label for="intelligence">Intelligence</label>
                <input type="number" class="form-control" name="intelligence" id="intelligence" placeholder="Intelligence">
            </div>
            {{-- button generate random for magie force agilite intelligence --}}
            <button type="button" class="btn btn-primary" onclick="random()">Random</button>
        </div>
        {{-- button submit --}}
        <button type="submit" class="btn btn-primary">Submit</button>
              
@endsection

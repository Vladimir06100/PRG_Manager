@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
    <h1 class="text-center">Modifier votre Personnage</h1>
    {{-- create form modif personnage --}}
    <form action="{{ route('my_personnages.update', $personnage->id) }}" method="POST" enctype="multipart/form-data">
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
          <label for="nom">Choissisez un nouveau Nom de votre Personnage</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{ $personnage->nom }}">
      </div>
      <div class="form-group">
          <label for="description">Modifier la Description</label>
          <textarea class="form-control" id="description" name="description" rows="3">{{ $personnage->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="specialite">Changer la Classe</label>
        <select class="form-control" id="specialite" name="specialite">
            <option value="Guerrier" @if($personnage->specialite == 'Guerrier') selected @endif>Guerrier</option>
            <option value="Mage" @if($personnage->specialite == 'Mage') selected @endif>Mage</option>
            <option value="Druide" @if($personnage->specialite == 'Druide') selected @endif>Druide</option>
            <option value="Assassin" @if($personnage->specialite == 'Assassin') selected @endif>Assassin</option>
            <option value="Berserker" @if($personnage->specialite == 'Berserker') selected @endif>Berserker</option>
            <option value="Archer" @if($personnage->specialite == 'Archer') selected @endif>Archer</option>
        </select>
      </div>
      <div class="card m-2">
        <div class="card-header">
          <h2 class="text-center">{{ $personnage->nom }}</h2>
          <h3 class="text-center">LEVEL : {{ $personnage->level }}</h3>
        </div>
        <div class="card-body">
          <div class="row col-12">
            <div class="col-6">
              <p class="text-center">Caracteristique</p>
              <p class="text-center">Vous pouvez ajoutez un level avec 5PV en plus et 0 a 2 stat random</p>
            <div class="row">
            <div class="col-6">
                {{-- vos statistique --}}
                <p class="text-center">Level : {{ $personnage->level }}</p>
                <p class="text-center">Magie : {{ $personnage->magie }}</p>
                <p class="text-center">Force : {{ $personnage->force }}</p>
                <p class="text-center">Agilite : {{ $personnage->agilite }}</p>
                <p class="text-center">Intelligence : {{ $personnage->intelligence }}</p>
                <p class="text-center">Vie : {{ $personnage->vie }}</p>
            </div>
            <div class="col-5">
              <label for="level">Level "+1"</label>
              <input type="text" class="form-control" id="level" name="level" placeholder="+1"  readonly>
              <label for="magie">Magie</label>
              <input type="text" class="form-control" name="magie" id="magie" placeholder="Magie"  readonly>
              <label for="force">Force</label>
              <input type="text" class="form-control" name="force" id="force" placeholder="Force"  readonly>
              <label for="agilite">Agilite</label>
              <input type="text" class="form-control" name="agilite" id="agilite" placeholder="Agilite" readonly>
              <label for="intelligence">Intelligence</label>
              <input type="text" class="form-control" name="intelligence" id="intelligence" placeholder="Intelligence" readonly>
              <label for="vie">Vie "plus 5"</label>
              <input type="text" class="form-control" name="vie" id="vie" placeholder="+5" readonly>
            </div>
            <button class="btn btn-primary" id="get-level-up">Level Up</button>
          </div>
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
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
@endsection

<script
src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(
    function() {
    $('#get-level-up').on('click', function(event) {
        event.preventDefault();
        $.getJSON('{{ route('randLevelUp') }}', function(response) {
            $('#level').val(response.level);
            $('#magie').val(response.magie);
            $('#force').val(response.force);
            $('#agilite').val(response.agilite);
            $('#intelligence').val(response.intelligence);
            $('#vie').val(response.vie);
        });
    });
  });
</script>

      
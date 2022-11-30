@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
    {{-- ici on va cree un formulaire pour cree un personnage --}}
    <form action="{{ route('personnages.store') }}" method="post">
        @csrf
         @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
        {{-- Nom --}}
        <h1>Crée votre propre personnage.</h1>
        <div class="form-group">
            <label for="nom">Nom "Choisissez un nom unique"</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom" value="{{ old('nom') }}"  required>
        </div>
        <div class="form-group">
            <label for="description">Description : "Ajoutez une description de votre personage"</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" value="{{ old('description') }}"  required></textarea>
        </div>
        <div class="form-group">
            <label for="specialite">Specialite : "Choisissez une classe parmi le choix."</label>
            <select class="form-control @error('specialite') is-invalid @enderror" name="specialite" id="specialite" value="{{ old('specialite') }}" required>
                <option value="">Choisissez votre class</option>
                <option value="Guerrier">Guerrier</option>
                <option value="Mage">Mage</option>
                <option value="Druide">Druide</option>
                <option value="Assassin">Assassin</option>
                <option value="Berserker">Berserker</option>
                <option value="Archer">Archer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image "Ajoutez une Url" :  Non obligatoire</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image" value="{{ old('image') }}" >
        </div>
        <div class="row p-2">  
            <label class="col-12 m-3">Choisissez vos Caractéristiques via button "Vous pouvez pas sélectionnez les Valeurs que Random"</label>
            <label class="col-12 m-3">Caractéristiques Magie, Force, Agilité, Intelligence ont une valeur comprise entre 1 et 14</label>
                
            <div class="col-2">
                <label for="magie">Magie</label>
                <input type="text" class="form-control" name="magie" id="magie" placeholder="Magie" value="{{ rand(1,14) }}" readonly>
            </div>
            <div class="col-2">
                <label for="force">Force</label>
                <input type="text" class="form-control" name="force" id="force" placeholder="Force" value="{{ rand(1, 14)  }}" readonly>
            </div>
            <div class="col-2">
                <label for="agilite">Agilite</label>
                <input type="text" class="form-control" name="agilite" id="agilite" placeholder="Agilite" value="{{ rand(1, 14), }}" readonly>
            </div>
            <div class="col-2">
                <label for="intelligence">Intelligence</label>
                <input type="text" class="form-control" name="intelligence" id="intelligence" placeholder="Intelligence" value="{{ rand(1, 14) }}" readonly>
            </div>
            <div class="col-4">
                <label for="vie">Vie "entre 20 et 50"</label>
                <input type="text" class="form-control" name="vie" id="vie"  placeholder="Choisissez une valeur de votre vie" value="{{ rand(20, 50) }}" readonly>
            </div>
        </div>
        <div class="row">
            <div classe="col m-3">
                <button type="button" class="btn btn-primary m-2" id="get-random-values">Changer les Caractéristiques</button>
                <button type="submit" class="btn btn-danger flex-end">Enregistrer le personnage</button>
            </div>      
        </div>
     </form>  
@endsection
  {{-- <!-- INCLUDE JQUERY --> --}}
<script
src="https://code.jquery.com/jquery-3.6.1.min.js"
integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(
    function() {
    $('#get-random-values').on('click', function(event) {
        event.preventDefault();
        $.getJSON('{{ route('rand') }}', function(response) {
        $('input[name=agilite]').val(response['agilite']);
        $('input[name=force]').val(response['force']);
        $('input[name=intelligence]').val(response['intelligence']);
        $('input[name=magie]').val(response['magie']);
        $('input[name=vie]').val(response['vie']);
        });
    });
    }
);
</script>
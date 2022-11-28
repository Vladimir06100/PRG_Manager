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
            {{-- old value refresh page --}}
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="{{ old('nom') }}"  required>
        </div>
        {{-- description --}}
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" value="{{ old('description') }}"  required></textarea>
        </div>
        {{-- select one specialite parmis "Guerrier", "Mage", "Druide", "Assassin", "Berserker", "Archer". --}}
        <div class="form-group">
            <label for="specialite">Specialite</label>
            <select class="form-control" name="specialite" id="specialite" value="{{ old('specialite') }}" >
                <option selected>Choisissez votre class</option>
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
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="{{ old('image') }}" >
        </div>
          
        <div class="row p-2">  
            <div class="col-3">
                <label for="magie">Magie</label>
                {{-- with value response json via rand--}}

                
                <input type="text" class="form-control" name="magie" id="magie" placeholder="Magie" value="{{ rand(1,14) }}" readonly>
            </div>
            <div class="col-3">
                <label for="force">Force</label>
                <input type="text" class="form-control" name="force" id="force" placeholder="Force" value="{{ rand(1, 14)  }}" readonly>
            </div>
            <div class="col-3">
                <label for="agilite">Agilite</label>
                <input type="text" class="form-control" name="agilite" id="agilite" placeholder="Agilite" value="{{ rand(1, 14), }}" readonly>
            </div>
            <div class="col-3">
                <label for="intelligence">Intelligence</label>
                <input type="text" class="form-control" name="intelligence" id="intelligence" placeholder="Intelligence" value="{{ rand(1, 14) }}" readonly>
            </div>
        </div>
        <div classe="col-12">
           <button type="button" class="btn btn-primary" id="get-random-values">Random</button>
        </div>      
    </div>
    <label for="vie">Vie "entre 20 et 50"</label>
    <input type="number" class="form-control" name="vie" id="vie" min="20" max="50" placeholder="Choisissez une valeur de votre vie" value="">
</div>
{{-- button submit --}}
<button type="submit" class="btn btn-primary">Submit</button>
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
                    });
                });
                }
            );
            </script>
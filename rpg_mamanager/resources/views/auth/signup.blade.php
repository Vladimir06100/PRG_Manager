@extends('base')
@section('title', 'Inscription')
@section('content')
    {{--CONTENT--}}
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini">
            <h1 class="text-center">Inscription</h1>
            <!-- Success message -->
      @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
      @endif
      <!-- Error message -->
         @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errorMessage)
                        <li>{{ $errorMessage }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
            <form class="m-2" name="inscription" id="inscription" action="{{ route('auth.signup') }}" method="post">  
            @csrf
              <div class="form-group">
                <label for="pseudo" >Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" class="form-control form-control @error('pseudo') is-invalid @enderror" value="{{ old('pseudo') }}" size="20">
              <div class="form-group">
                <label for="nom">Votre Nom</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" size="20">
              <div class="form-group">
                <label for="prenom">Votre Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" size="20">
              <div class="form-group">
                <label for="email">Votre Email</label>
                <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" size="20">
              <div class="form-group">
                <label for="password">Votre Mot de Passe</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="" size="20">
              <div class="form-group">
                <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-success m-2" value="Inscription">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
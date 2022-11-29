@extends('base')
@section('title', 'Profile')
@section('content')
    {{--CONTENT--}}
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini">
            <h1 class="text-center">Votre Profile</h1>
            <!-- Session message -->
       @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
      @endif
      @if(auth()->check())
        <!-- Error message -->
              <h2>Bonjour {{ $user->pseudo }}</h2>
              <p>Nom : {{ $user->nom }}</p>
              <p>Prenom : {{ $user->prenom }}</p>
              <p>Email : {{ $user->email }}</p>
      @endif
          </div>
        </div>
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
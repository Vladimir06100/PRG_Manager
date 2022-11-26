@extends('base')
@section('title', 'Profile')
@section('content')
    {{--CONTENT--}}
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini">
            <h1 class="text-center">votre profile</h1>
            <!-- Session message -->
       @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
      @endif
      @if(session()->has('user'))
            

        <!-- Error message -->
              <h2>Bonjour {{ $user->pseudo }}</h2>
              <p>nom : {{ $user->nom }}</p>
              <p>prenom : {{ $user->prenom }}</p>
              <p>email : {{ $user->email }}</p>
              
      @endif
          </div>
        </div>
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
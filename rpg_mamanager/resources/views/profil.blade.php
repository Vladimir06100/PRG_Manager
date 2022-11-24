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
              <div>
                <!-- result user profile -->
              <h1>Salut {{ $user->pseudo }}</h1>

              <p>Nom : {{ $user->nom }}</p>
              <p>Prenom : {{ $user->prenom }}</p>
              <p>email : {{ $user->email }}</p>
              <p>password : {{ $user->password }}</p>

          </div>
        </div>
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
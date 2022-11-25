@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
      <section class="section">
        <div class="container">
         
          @if(session()->has('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
          @endif
          @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $errorMessage)
                          <li>{{ $errorMessage }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="row">
            <h1 class="text-center">Connexion</h1>
            <form name="connexion" id="connexion" action="{{ route('auth.signin') }}" method="post">
             @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}" size="10">
                </div>
                <div class="form-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" size="10">
                </div>
                <div class="form-group">
                  <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-success m-2" value="Connexion">
                </div>
              </form>
            <p class="small text-center text-gray-soft">Vous n'avez pas encore de compte? <a href="{{ route('auth.get_signup') }}" class="btn btn-success m-2">Inscription</a></p>
          </div>
        </div>
      </section>
  {{--END CONTENT--}}
@endsection
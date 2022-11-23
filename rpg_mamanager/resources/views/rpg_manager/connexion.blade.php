@extends('base')
@section('title', 'Inscription')
@section('content')
    {{--CONTENT--}}
      <section class="section">
        <div class="container">
          <div class="row">
            <h1 class="text-center">Connexion</h1>
              <form name="loginform" id="loginform" action="" method="post">
                <div class="form-group">
                  <label for="user_login">Email</label>
                  <input type="text" name="log" id="user_login" class="form-control" value="" size="10">
                </div>
                <div class="form-group">
                    <label for="user_pass">Mot de Passe</label>
                    <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="10">
                </div>
                <div class="form-group">
                  <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-success m-2" value="Connexion">
                </div>
              </form>
            <p class="small text-center text-gray-soft">Vous n'avez pas encore de compte? <a href="" class="btn btn-success m-2">Inscription</a></p>
          </div>
        </div>
      </section>
  {{--END CONTENT--}}
@endsection
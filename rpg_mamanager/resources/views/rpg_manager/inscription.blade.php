@extends('base')
@section('title', 'Inscription')
@section('content')
    {{--CONTENT--}}
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini">
            <h1 class="text-center">Inscription</h1>
            <form name="loginform" id="loginform" action="" method="post">  
              <div class="form-group">
                <label for="pseudo" >Pseudo</label>
                <input type="text" name="log" id="user_login" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <label for="nom">Votre Nom</label>
                <input type="text" name="log" id="user_login" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <label for="prenom">Votre Prenom</label>
                <input type="text" name="log" id="user_login" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <label for="nom">Votre Email</label>
                <input type="text" name="log" id="user_login" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <label for="user_pass">Votre Mot de Passe</label>
                <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20">
              </div>
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
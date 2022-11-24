@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
      <section class="section">

    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif

        <div class="container">
          <div class="row">
         @foreach($user as $item)
            <h1 class="text-center">Page Principale</h1>
            <h2>Bienvenue {{ $item  }}--}}</h2>
            {{--@endforeach--}}
            @if (Request::session()->has('user')) 
            <p>Vous êtes connecté</p>
            @else
            <p>Vous n'êtes pas connecté</p>
            @endif
          @endforeach
          </div>
        </div>
      </section>
      <!-- create 2e section -->
      <section>
      
  {{--END CONTENT--}}
@endsection
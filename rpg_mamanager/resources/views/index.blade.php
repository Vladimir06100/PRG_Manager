@extends('base')
@section('title', 'Connexion')
@section('content')
    {{--CONTENT--}}
      <section class="section">
    @if(session()->has('user'))
        <div class="alert alert-success">{{ session()->get('user') }}</div>
    @endif
        <div class="container">
          <div class="row">
            
          </div>
        </div>
      </section>
  {{--END CONTENT--}}
@endsection
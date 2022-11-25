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
      
        <!-- Error message -->
       
              <p>nom : {{ $user->nom }}</p>
        
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
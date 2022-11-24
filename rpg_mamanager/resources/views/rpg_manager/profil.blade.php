@extends('base')
@section('title', 'Profile')
@section('content')
    {{--CONTENT--}}
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini">
            <h1 class="text-center">votre profile</h1>
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
          
          {{--   @if ($request->session()->exist('users')) { --}}
              <div>
                <p>nom : {{ $request->session()->get('users')->nom }}</p>
                <p>prenom : {{ $request->session()->get('users')->prenom }}</p>
                <p>pseudo : {{ $request->session()->get('users')->pseudo }}</p>
                <p>email : {{ $request->session()->get('users')->email }}</p>
{{-- } --}}
    
{{--@endif --}}
          </div>
        </div>
      </div>
    </section>
  {{--END CONTENT--}}
@endsection
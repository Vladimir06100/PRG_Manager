<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
    {{--HEADER--}}
    
    
    <header class="p-3 text-bg-dark">
      <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">Page Principale</a></li>
          @if(session()->has('user'))
           <li><a href="{{  route('profil') }}" class="nav-link px-2 text-white">Votre profile</a></li>
           <li><a href="" class="nav-link px-2 text-white">Vos personnages</a></li>
           <li><a href="" class="nav-link px-2 text-white">Groupes</a></li>
           <li><a href="{{ route('personnages.create') }}" class="nav-link px-2 text-white">Cree un personage</a></li>
           @endif
        </ul>
       
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>
       
        <div class="text-end">
          @if(session()->has('user'))
          <a href="{{ route('auth.logout') }}" class="btn btn-outline-light me-2">Deconnexion</a>
          @else
           <a href="{{ route('auth.get_signin') }}" class="btn btn-outline-success me-2 $gray-600">Connexion</a>
          <a href="{{ route('auth.get_signup') }}" class="btn btn-outline-success">Inscription</a>
          @endif
        </div>
      </div>
      </div>
    </header>
    {{--END HEADER--}}

    {{--CONTENT--}}
  <main class="container m-auto">
     @yield('content')
  </main>
  {{--END CONTENT--}}

  {{--FOOTER--}}
  <footer class="mt-auto py-1 text-bg-dark">
    <p class="text-center text-muted">© 2022 Vladimir Sinkevitch</p>
  </footer>
  {{--END FOOTER--}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>
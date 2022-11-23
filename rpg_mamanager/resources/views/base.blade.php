<!doctype html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <title>{{--@yield('title')--}}Titre test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="d-flex flex-column h-100">
    {{--HEADER--}}
    <header class="p-3 text-bg-dark">
      <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('index') }}" class="nav-link px-2 text-white">Page Principale</a></li>
          <li><a href="" class="nav-link px-2 text-white">List de personnages</a></li>
          <li><a href="" class="nav-link px-2 text-white">Vos personnages</a></li>
          <li><a href="" class="nav-link px-2 text-white">Groupes</a></li>
          <li><a href="" class="nav-link px-2 text-white">Cree un personage</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="{{ route('user.connexion') }}" class="btn btn-outline-success me-2">Connexion</a>
          <a href="{{ route('user.inscription') }}" class="btn btn-outline-success">Inscription</a>
        </div>
      </div>
      </div>
    </header>
    {{--END HEADER--}}

    {{--CONTENT--}}
  <main class="container">
    <div class="content">
     {{-- @yield('content') --}}
    </div>
  </main>
  {{--END CONTENT--}}

  {{--FOOTER--}}
  <footer class="mt-auto py-1 text-bg-dark">
    <ul class="nav justify-content-center pb-2 mb-2">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Page Principale</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">List de personnages</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Vos personnages</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Groupes</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Cree un personage</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Vladimir Sinkevitch</p>
  </footer>
  {{--END FOOTER--}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>
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
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Page Principale</a></li>
          <li><a href="#" class="nav-link px-2 text-white">List de personnages</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Vos personnages</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Groupes</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Cree un personage</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-success me-2">Connexion</button>
          <button type="button" class="btn btn-outline-success">Inscription</button>
        </div>
      </div>
      </div>
    </header>
    {{--END HEADER--}}

    {{--CONTENT--}}
  <main class="container m-auto">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="container container--mini"><img class="img-fluid mx-auto d-block mb-5" src="http://www.w3.org/2000/svg" alt="logo connexion">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="img-fluid bi bi-controller" viewBox="0 0 16 16">
                <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
            </svg>
            <form name="loginform" id="loginform" action="https://themes.getbootstrap.com/wp-login.php" method="post">
              <div class="form-group">
                <label for="user_login">Email</label>
                <input type="text" name="log" id="user_login" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <label for="user_pass">Password</label>
                <a class="form-sublink" href="https://themes.getbootstrap.com/my-account/lost-password/">Forgot password?</a>
                <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20">
              </div>
              <div class="form-group">
                <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-brand btn-block mb-4" value="Sign In">
                <input type="hidden" name="redirect_to" value="https://themes.getbootstrap.com/my-account/">
              </div>
            </form>
            <p class="small text-center text-gray-soft">Don't have an account yet? <a href="https://themes.getbootstrap.com/my-account/">Sign up</a></p>
          </div>
        </div>
      </div>
    </section>
      
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
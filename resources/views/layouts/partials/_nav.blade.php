<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost:8000/">{{ config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ '/' == request()->path() ? 'active':''}} " aria-current="page" href="/">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ 'about' == request()->path() ? 'active':''}} " href="/about">A propos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#planet" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Planet
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="laravel.com">Laravel.com</a></li>
              <li><a class="dropdown-item" href="laravel.io">Laravel.io</a></li>
              <li><a class="dropdown-item" href="#">Laracast</a></li>
              <li><a class="dropdown-item" href="#">Larajobs</a></li>
              <li><a class="dropdown-item" href="#">Actualités Laravel</a></li>
              <li><a class="dropdown-item" href="#">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#artisan" tabindex="-1" aria-disabled="false">Artisans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ 'contact' == request()->path() ? 'active':''}} " href="/contact">Contact</a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="nav-link">Login</a></li>
            <li><a href="#" class="nav-link">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
  @if (session()->has('message'))
      <div class="alert alert-danger offset-2" role="alert"><i class="fas fa-check"></i>
           {{ session()->get('message') }}
        </div>
  @endif
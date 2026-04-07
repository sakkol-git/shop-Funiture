<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3 navbar-custom">
  <div class="container-fluid px-0">
    <a class="navbar-brand" href="{{ route('home') }}">
      <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
      <span class="" style="letter-spacing: .12rem;">Furnish</span>
      <span>Template</span>
    </span></a>

    <div class="mx-auto d-lg-block d-none">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('contact') }}" >Contact</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Products</a>
        </li>
        @endauth
      </ul>
      </div>
    <div class="d-flex align-items-center gap-4">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @guest
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary rounded-2 border text-dark hover-white" href="{{ route('register') }}" >Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary rounded-2 ms-2 text-dark hover-white" href="{{ route('login') }}" >Login</a>
        </li>
        @endguest
        @auth
        <span class=" px-3 py-2 text-muted align-items-center d-flex gap-2">
            Hi {{ auth()->user()->name }}
        </span>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger rounded-3 border text-red hover-white">Logout</button>
        </form>
        @endauth
        </ul>
        <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>
</a>

    </div>
  </div>
</nav>

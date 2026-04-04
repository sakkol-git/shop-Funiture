<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header px-4">
     <a class="navbar-brand" href="#">
      <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
      <span class="" style="letter-spacing: .12rem;">Furnish</span>
      <span>Template</span>
    </span></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="navbar-custom">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">Products</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
        </li>


        <li class="nav-item">
          <a class="nav-link " href="{{ route('contact') }}" >Contact</a>
        </li>
      </ul>
      </div>
  </div>
</div>

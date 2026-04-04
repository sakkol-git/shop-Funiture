@extends('layouts.app')

@section('title', 'Products eCommerce Bootstrap HTML Template - Furnish')
@section('body_class', 'font-sans text-gray-800')

@section('content')
<main>
  <section class="py-lg-8 py-5 text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h1 class="display-5 mb-3">Product List</h1>
          <p class="text-muted lead">Manage your product catalog. Create, edit, and delete items from the list below.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-lg-8 py-5">
    <div class="container">
      <div class="row">
        <aside class="col-lg-3 mb-4">
          <h3 class="fw-semibold mb-3 h5">Filters</h3>
          <div class="mb-4 bg-light border bg-opacity-50 p-4">
            <h6 class="fw-semibold mb-3 text-xs text-uppercase">Category</h6>
            <ul class="list-unstyled lh-lg small mb-0">
              <li><a href="#" class="text-dark">Living Room</a></li>
              <li><a href="#" class="text-dark">Bedroom</a></li>
              <li><a href="#" class="text-dark">Office</a></li>
              <li><a href="#" class="text-dark">Decor</a></li>
            </ul>
          </div>
          <div class="mb-4 bg-light border bg-opacity-50 p-4">
            <h6 class="fw-semibold mb-3 text-xs text-uppercase">Price</h6>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="price1">
              <label class="form-check-label" for="price1">Under $100</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="price2">
              <label class="form-check-label" for="price2">$100-$300</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="price3">
              <label class="form-check-label" for="price3">Above $300</label>
            </div>
          </div>
          <div class="mb-4 bg-light border bg-opacity-50 p-4">
            <h6 class="fw-semibold mb-3 text-xs text-uppercase">Colour</h6>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="col1">
              <label class="form-check-label" for="col1">Gray</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="col2">
              <label class="form-check-label" for="col2">Black</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="col3">
              <label class="form-check-label" for="col3">Wood</label>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary">Apply Filters</button>
          </div>
        </aside>

        <div class="col-lg-9">
          <div class="row g-4 mb-4">
            <div class="col-12">
              <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                  <h2 class="h4 mb-1">Products</h2>
                  <p class="text-muted mb-0">{{ $products->count() }} items found.</p>
                </div>
                <div class="d-grid">
                  <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Products</a>
                </div>
              </div>
            </div>
          </div>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <div class="row g-4">
            @forelse($products as $product)
              <div class="col-sm-6 col-md-4">
                <div class="card product-card">
                  <a href="{{ route('products.show', $product) }}">
                    <img src="{{ $product->image_url ?: asset('assets/images/product-img-1.jpg') }}" class="card-img-top" alt="{{ $product->name }}">
                  </a>
                  <div class="card-body">
                    <p class="text-muted mb-2 text-uppercase text-xs mb-3">Product</p>
                    <div class="mb-3">
                      <h3 class="h5 mb-1"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                      <p class="text-muted small mb-2">{{ \Illuminate\Support\Str::limit($product->description, 60) }}</p>
                      <div>
                        <span class="fw-semibold">${{ number_format($product->price, 2) }}</span>
                      </div>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                      <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('products.destroy', $product) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="col-12">
                <div class="alert alert-secondary">No products found. Use the Create button to add your first product.</div>
              </div>
            @endforelse
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
@endsection

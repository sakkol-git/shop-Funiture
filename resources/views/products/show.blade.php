@extends('layouts.app')

@section('title', $product->name)
@section('body_class', 'font-sans text-gray-800')

@section('content')
<main>
	<section class="py-lg-8 py-5">
		<div class="container">
			@if(session('success'))
				<div class="alert alert-success">{{ session('success') }}</div>
			@endif
			<div class="row g-5 align-items-center">
				<div class="col-lg-6">
					<img src="{{ $product->image_url ?: asset('assets/images/product-img-1.jpg') }}" alt="{{ $product->name }}" class="img-fluid w-100 border">
				</div>
				<div class="col-lg-6">
					<p class="text-muted text-uppercase small mb-2">Product</p>
					<h1 class="display-6 mb-3">{{ $product->name }}</h1>
					<p class="text-muted mb-4">{{ $product->description }}</p>
					<div class="d-flex align-items-center gap-3 mb-4">
						<span class="h4 mb-0">${{ number_format($product->price, 2) }}</span>
					</div>
					<div class="d-flex flex-wrap gap-2 mb-4">
						<a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit Product</a>
						<a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to Products</a>
					</div>
					<form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline-block">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete Product</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection

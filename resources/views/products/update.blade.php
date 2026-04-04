@extends('layouts.app')

@section('title', 'Update Product')
@section('body_class', 'font-sans text-gray-800')

@section('content')
<main>
	<section class="py-lg-8 py-5">
		<div class="container text-center">
			<h1 class="display-6 mb-3">Update Product</h1>
			<p class="text-muted lead mb-4">Edit the product details using the form below.</p>
			<a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary">View Product</a>
		</div>
	</section>

	<section class="pb-lg-8 pb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="card rounded-0 border-0 shadow">
						<div class="card-body p-4 p-lg-5">
							<h2 class="h5 mb-4">Update Product</h2>
							<form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								@if($errors->any())
									<div class="alert alert-danger">
										<ul class="mb-0">
											@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<div class="row g-3">
									<div class="col-12">
										<label for="update-name" class="form-label">Product Name</label>
										<input type="text" class="form-control" id="update-name" name="name" value="{{ old('name', $product->name) }}">
									</div>
									<div class="col-12">
										<label for="update-description" class="form-label">Description</label>
										<textarea class="form-control" id="update-description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
									</div>
									<div class="col-md-6">
										<label for="update-price" class="form-label">Price</label>
										<input type="number" class="form-control" id="update-price" name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}">
									</div>
									<div class="col-md-6">
										<label for="update-image-file" class="form-label">Image Upload</label>
										<input type="file" class="form-control" id="update-image-file" name="image_file" accept="image/*">
									</div>
									<div class="col-12">
										<label for="update-image-url" class="form-label">Image URL</label>
										<input type="url" class="form-control" id="update-image-url" name="image_url" value="{{ old('image_url', $product->image_url) }}">
									</div>
								</div>
								<div class="d-flex justify-content-end gap-2 mt-4">
									<a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary">Cancel</a>
									<button type="submit" class="btn btn-primary">Update Product</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection

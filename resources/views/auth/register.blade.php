@extends('layouts.app')

@section('title', 'Create Product')
@section('body_class', 'font-sans text-gray-800')

@section('content')
<main>
	<section class="py-lg-8 py-5">
		<div class="container text-center">
			<h1 class="display-6 mb-3">Create Your New Account</h1>
			<p class="text-muted lead mb-4">Fill in the details below to create your account.</p>
			<a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Back to Products</a>
		</div>
	</section>

	<section class="pb-lg-8 pb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="card rounded-0 border-0 shadow">
						<div class="card-body p-4 p-lg-5">
							<h2 class="h5 mb-4">Create Your Account</h2>
							<form method="POST" action="{{ route('register') }}" >
								@csrf
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
										<label for="create-name" class="form-label">Full Name</label>
										<input type="text" class="form-control" id="create-name" name="name" value="{{ old('name') }}" placeholder="John Doe">
									</div>
                                    <div class="col-12">
										<label for="create-email" class="form-label">Email</label>
										<input type="email" class="form-control" id="create-email" name="email" value="{{ old('email') }}" placeholder="john.doe@example.com">
									</div>
									<div class="col-12">
										<label for="create-password" class="form-label">Password</label>
										<input type="password" class="form-control" id="create-password" name="password" placeholder="Enter your password">
									</div>

								<div class="d-flex justify-content-end gap-2 mt-4">
									<button type="submit" class="btn btn-primary">Register</button>
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

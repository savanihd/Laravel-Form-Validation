<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Form Validation Example</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="card mt-5">
		<div class="card-header"><h4>Laravel Form Validation</h4></div>
		<div class="card-body">
			<form method="POST" action="{{ route('users.store') }}">
				@csrf

				@session("success")
				<div class="alert alert-success">
					{{ $value }}
				</div>
				@endsession

				@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif

				<div class="mt-2">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" value="{{ request()->old('name') }}">

					@error("name")
					<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="mt-2">
					<label>Email:</label>
					<input type="text" name="email" class="form-control" value="{{ request()->old('email') }}">

					@error("email")
					<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="mt-2">
					<label>Password:</label>
					<input type="password" name="password" class="form-control">

					@error("password")
					<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="mt-2">
					<label>Confirm Password:</label>
					<input type="password" name="password_confirmation" class="form-control">

					@error("password_confirmation")
					<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="mt-2">
					<button class="btn btn-success">Submit</button>
				</div>

			</form>
		</div>
	</div>
</div>

</body>
</html>
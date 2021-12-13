@extends('./layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="/users" class="btn btn-outline-primary">users List</a></div>

			
			
			<form  method="POST" action="{{ route('users.store') }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="title">Name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" required>
					</div>
					<label for="title">Email</label>
					<div>
						<input type="text" id="email" class="form-control mb-4" name="email"
							placeholder="Enter email" required>
					</div>
					<label for="title">password</label>
					<div>
						<input type="text" id="password" class="form-control mb-4" name="password"
							placeholder="Enter password" required>
					</div>
					<label for="title">role</label>
					<div>
					
						@forelse($roles as $role)
							<div>
								<input type="radio" id="{!! $role->id !!}" name="role_id" value="{!! $role->id !!}"
										checked>
								<label for="huey">{!! $role->name !!}</label>
							</div>
						@empty
								<p class="text-danger">Vous devez créer des rôle avant de créer des users</p>
						@endforelse
					
					</div>
				</div>
				

				@csrf
				
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add New</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
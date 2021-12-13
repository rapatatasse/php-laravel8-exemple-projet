@extends('./layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="/users" class="btn btn-outline-primary">users List</a></div>

			<form id="edit-frm" method="POST" action="{{ route('users.update', $user->id) }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="title">Name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" value="{!! $user->name !!}"
							required>
					</div>
					<div>
						<input type="text" id="email" class="form-control mb-4" name="email"
							placeholder="Enter email" value="{!! $user->email !!}"
							required>
					</div>
					<div>
						@forelse($roles as $role)
							<div>
								<input type="radio" 
								@if($role->id == $user->role_id) checked @endif
								id="role_id" name="role_id" value="{!! $role->id !!}" >
								<label for="huey">{!! $role->name !!}</label>
							</div>
						@empty
								<p class="text-danger">Vous devez créer des rôle avant de créer des users</p>
						@endforelse

						
					</div>
				</div>
			

				@method('PATCH') 
           	    @csrf
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection

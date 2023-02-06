@extends('./layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="/roles" class="btn btn-outline-primary">role List</a></div>

			<form id="edit-frm" method="POST" action="{{ route('roles.update', $role->id) }}" class="border p-3 mt-2">
				@include('roles/form')
			

				@method('PATCH') 
           	    @csrf
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection

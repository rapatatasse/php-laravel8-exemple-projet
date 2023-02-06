@extends('./layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
			<div class="text-left"><a href="/roles" class="btn btn-outline-primary">roles List</a></div>

			
			
			<form  method="POST" action="{{ route('roles.store') }}" class="border p-3 mt-2">
				@include('roles/form')
				

				@csrf
				
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add New</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
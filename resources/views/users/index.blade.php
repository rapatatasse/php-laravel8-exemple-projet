@extends('./layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">List users</h1>
			<div class="text-left"><a href="users/create" class="btn btn-outline-primary">Add new
				user</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">name</th>
						<th scope="col">email</th>
						<th scope="col">role</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($users as $user)
					<tr>
						<td>{!! $user->id !!}</td>
						<td>{!! $user->name !!}</td>
						<td>{!! $user->email !!}</td>
						<td>{!! $user->role->name !!}</td>
						<td>
							<a href="users/{!! $user->id !!}/edit" class="btn btn-outline-primary">Edit</a>
							<button type="button" class="btn btn-outline-danger ml-1" onClick='showModel({!! $user->id !!})'>Delete</button>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No users found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="modal fade" id="deleteConfirmationModel" tabindex="-1" user="dialog"
	aria-labelledby="myModalLabel">
	<div class="modal-dialog" user="document">
		<div class="modal-content">
			<div class="modal-body">Are you sure to delete this record?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
				<form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>

<script>
function showModel(id) {
	var frmDelete = document.getElementById("delete-frm");
	frmDelete.action = 'users/'+id;
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'block';
	confirmationModal.classList.remove('fade');
	confirmationModal.classList.add('show');
}

function dismissModel() {
	var confirmationModal = document.getElementById("deleteConfirmationModel");
	confirmationModal.style.display = 'none';
	confirmationModal.classList.remove('show');
	confirmationModal.classList.add('fade');
}
</script>
@endsection
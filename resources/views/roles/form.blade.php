
<div class="control-group col-6 text-left">
					<label for="title">Name</label>
                    <?php $value = (isset($role)) ? $role->name : "" ; ?>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" value="{!! $value !!}"
							required>
					</div>
</div>
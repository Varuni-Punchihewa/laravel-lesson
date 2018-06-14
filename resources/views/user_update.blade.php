<html>
<h2>User update</h2>
<form method="post" action="{{ url("/user_update_post/".$user->id) }}">
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	{{ csrf_field() }}
	<label for="first_name">First name</label>
	<input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}"/>
	<br>
	<label for="last_name">Last name</label>
	<input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}"/>
	<br>
	<label for="username">Username</label>
	<input type="text" id="username" name="username" value="{{ $user->username }}" readonly/>
	<br>
	<label for="age">Age</label>
	<input type="text" id="age" name="age" value="{{ isset($user->userDetail->age)?$user->userDetail->age:"" }}"/>
	<br>
	<label for="address">Address</label>
	<input type="text" id="address" name="address" value="{{ isset($user->userDetail->address)?$user->userDetail->address:"" }}"/>
	<br>
	<input type="submit" value="Update">
</form>
</html>	
<html>
<h2>Register</h2>
<form method="post" action="{{ url("register_post") }}">
    
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
    <input type="text" id="first_name" name="first_name" value=""/>
    <br>
	<span>{{ $errors->first('first_name') }}</span>
	<br>	
    <label for="last_name">Last name</label>
    <input type="text" id="last_name" name="last_name" value=""/>
    <br>
	<span>{{ $errors->first('last_name') }}</span>
	<br>
    <label for="username">Username</label>
    <input type="text" id="username" name="username" value=""/>
    <br>
	<span>{{ $errors->first('username') }}</span>
	<br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value=""/>
    <br>
	<span>{{ $errors->first('password') }}</span>
	<br>
    <input type="submit" value="Submit">
</form>
</html>	
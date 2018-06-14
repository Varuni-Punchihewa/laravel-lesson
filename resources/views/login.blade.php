<html>
<body>
<h2>Login</h2>
<form method="post" action="{{ url("login_post") }}">

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
    <label for="username">Username</label>
    <input type="text" id="username" name="username" value=""/>
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value=""/>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>	
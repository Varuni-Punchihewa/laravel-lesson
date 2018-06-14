<html>
<body>
<h2>HOME</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Update</th>
    </tr>
    @foreach($user_data as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->username }}</td>
            <td><a href="{{ url('/user_update/'.$user->id) }}">
                    <button>Update</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
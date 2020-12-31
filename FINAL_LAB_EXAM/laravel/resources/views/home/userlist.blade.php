<!DOCTYPE html>
<html>
<head>
	<title>Product list page</title>
</head>
<body>

	<h3>All Product</h3>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td>Username</td>
			<td>Contact</td>
			<td>Type</td>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user['ename']}}</td>
			<td>{{$user['username']}}</td>
			<td>{{$user['contact']}}</td>
			<td>{{$user['type']}}</td>
			<td>
				<a href="{{route('home.edit',$user['username'])}}">Edit</a> |
				<a href="">Delete</a> 
			</td>
		</tr>
		@endforeach

	</table>

</body>
</html>
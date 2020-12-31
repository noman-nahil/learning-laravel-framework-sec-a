<!DOCTYPE html>
<html>
<head>
	<title>Add New Employee</title>
</head>
<body>
	<form method="post">
		@csrf
		<fieldset>
			<legend>Edit Employee</legend>
			<table>
				<tr>
					<td>Employee Name</td>
					<td><input type="text" name="ename" value="{{$ename}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Contact no.</td>
					<td><input type="text" name="contact" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
				<tr>
					<td><a href="/home">Back</a></td>
					<td><a href="/logout">logout</a></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
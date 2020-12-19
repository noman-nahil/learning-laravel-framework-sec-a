<!DOCTYPE html>
<html>
<head>
	<title>Add New Employee</title>
</head>
<body>
	<form method="post">
		@csrf
		<fieldset>
			<legend>Add New Employee</legend>
			<table>
				<tr>
					<td>Employee Name</td>
					<td><input type="text" name="ename"></td>
				</tr>
				<tr>
					<td>Contact no.</td>
					<td><input type="text" name="contact"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
				<tr>
					<td><a href="/home">Back</a></td>
					<td><a href="/logout">logout</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
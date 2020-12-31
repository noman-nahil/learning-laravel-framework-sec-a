<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>
</head>
<body>
	<form method="post">
		@csrf
		<fieldset>
			<legend>Add New Product</legend>
			<table>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="pname"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price"></td>
				</tr>
	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
				<tr>
					<td></td>
					<td><h5>{{session('pmsg')}}<h5></td>
				</tr>
				<tr>
					<td><a href="/employee">Back</a></td>
					<td><a href="/logout">logout</a></td>
					<td><a href="">Product List</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
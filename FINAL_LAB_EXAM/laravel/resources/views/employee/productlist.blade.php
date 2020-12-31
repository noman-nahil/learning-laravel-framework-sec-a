<!DOCTYPE html>
<html>
<head>
	<title>Product list page</title>
</head>
<body>

	<h3>All Product</h3>
	<a href="/employee">Back</a> |
	<a href="/logout">logout</a>

	<br>
	<br>

	<table border="1">
		<tr>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{$product['pname']}}</td>
			<td>{{$product['quantity']}}</td>
			<td>{{$product['price']}}</td>
			<td>
				<a href="">Edit</a> |
				<a href="">Delete</a> 
			</td>
		</tr>
		@endforeach

	</table>

</body>
</html>
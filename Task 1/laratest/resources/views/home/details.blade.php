<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>{{$students[$id-1]['id']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$students[$id-1]['name']}}</td>
		</tr>
		<tr>
			<td>cgpa</td>
			<td>{{$students[$id-1]['cgpa']}}</td>
		</tr>
		<tr>
			<td>email</td>
			<td>{{$students[$id-1]['email']}}</td>

		</tr>
		

	</table>
</body>
</html>
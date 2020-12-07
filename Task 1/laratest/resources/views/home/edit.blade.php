<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>
<form action="/edit/{{$id}}" method="POST">
	<table border="1">
		<tr>
			<td>Id</td>
			<td><input type="text" name="id" value="{{$students[$id-1]['id']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$students[$id-1]['name']}}"></td>
		</tr>
		<tr>
			<td>cgpa</td>
			<td><input type="text" name="cgpa" value="{{$students[$id-1]['cgpa']}}"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" name="email" value="{{$students[$id-1]['email']}}"></td>

		</tr>

		<tr>
		<td></td>
			<td>
			<input type="submit" value="Update">
			</td>
		</tr>
		

	</table>
	</form>
</body>
</html>
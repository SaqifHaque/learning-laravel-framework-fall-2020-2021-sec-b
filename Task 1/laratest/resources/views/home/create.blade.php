<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>
	<br>
<form action="/create" method="POST">
	<table border="1">
		<tr>
			<td>Id</td>
			<td><input type="text" name="id" ></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" ></td>
		</tr>
		<tr>
			<td>cgpa</td>
			<td><input type="text" name="cgpa"></td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" name="email" ></td>

		</tr>

		<tr>
		<td></td>
			<td>
			<input type="submit" value="Insert">
			</td>
		</tr>
		

	</table>

	<hr>

	
	


	</form>
</body>
</html>
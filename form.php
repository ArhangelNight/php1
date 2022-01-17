

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<form action="create.php" method="post" enctype="multipart/form-data">
		<input type="text" name="name" value="name"><br><br>
		<input type="text" name="text" value="text"><br><br>
		<input type="file" name="image"><br><br>
		<button type="submit">Submit</button>
	</form>
	
</body>
</html>
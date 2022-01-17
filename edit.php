<?php 

	$id = $_REQUEST['id']; 

	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query("SELECT * FROM posts WHERE id = $id ");
	$post  = $statement->fetchAll(PDO::FETCH_ASSOC);
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<form action="update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $post[0]["id"];?>">
		<input type="text" name="name" value="<?php echo $post[0]["name"];?>"><br><br>
		<textarea name="text"><?php echo $post[0]["description"];?></textarea><br><br>
		<img src="/images/<?php echo $post[0]['image'];?>" width="200" height="200" alt=""><br><br>
		<input type="hidden" name="old_img" value="<?php echo $post[0]['image'];?>">
		<input type="file" name="image"><br><br>
		<button type="submit">Submit</button>
	</form>
	
</body>
</html>


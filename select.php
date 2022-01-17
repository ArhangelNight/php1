<?php

	$id = $_REQUEST['id']; 

	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query("SELECT * FROM posts WHERE id = $id ");
	$post  = $statement->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($post);
	//echo "<br>";
	//echo $post[0]['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>select</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		
		<h2><?php echo $post[0]["name"];?></h2>
		<br>
		<p><?php echo $post[0]["description"];?></p>
		<img src="/images/<?php echo $post[0]['image'];?>" width="500" height="500" alt=""><br><br>
	</div>

</body>
</html>
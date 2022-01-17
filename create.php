<?php 
	
	session_start();
	
	if (count($_REQUEST > 0)) {
		if ($_FILES['image']) {
			$img_name = $_FILES['image']['name'];
			$tmp_name = $_FILES['image']['tmp_name'];
			$path = "images/" . $img_name;
			move_uploaded_file($tmp_name, $path);
		}
		else {$path = NULL;}

		$name = $_REQUEST['name'];
		$text = $_REQUEST['text'];
		$user_id = $_SESSION['user_id'];


		$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
		$statement = $pdo->query("INSERT INTO posts (user_id, name, description, image) VALUES ('$user_id','$name', '$text', '$img_name')");
	}
	echo "<a href='/index.php' class='btn btn-success btn-lg'>На главную</a>";

?>
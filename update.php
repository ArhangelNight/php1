<?php 

	session_start();
	if (count($_REQUEST > 0)) {
		$old_img = $_REQUEST['old_img'];

		if ($_FILES['image']) {
			$img_name = $_FILES['image']['name'];
			$tmp_name = $_FILES['image']['tmp_name'];
			$path = "images/" . $img_name;
			move_uploaded_file($tmp_name, $path);
			unlink("images/" . $old_img);
		}
		else {
			$img_name = $old_img;
		}
			
		$user_id = $_SESSION['user_id'];
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$text = $_REQUEST['text'];
		


		$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
		$statement = $pdo->query("UPDATE posts SET user_id = '$user_id', name = '$name', description = '$text', image = '$img_name' WHERE id = $id");
	}
	echo "<a href='/index.php' class='btn btn-success btn-lg'>На главную</a>";

?>
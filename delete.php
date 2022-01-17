<?php 
	var_dump($_REQUEST);
	$id = $_REQUEST ['id'];
	if ($_REQUEST ['image']) {
		$img_name = $_REQUEST ['image'];
		unlink("images/" . $img_name);
	}

	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query("DELETE FROM posts WHERE id = $id ");
	var_dump($statement);

?>
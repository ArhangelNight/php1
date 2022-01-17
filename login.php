<?php 
	
	session_start();


	if (count($_REQUEST > 0)) {
	$username = $_REQUEST['username'];
	$pass = $_REQUEST['password'];


	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query("SELECT * FROM users WHERE user_name = '$username' && password = '$pass'");
	$user = $statement->fetchAll(PDO::FETCH_ASSOC);
	if ($user) 
		{	
			$_SESSION['user_id'] = $user[0]['id'];
			$_SESSION['username'] = $username;
			echo "Добро пожаловать " . $username . "<br>";
			echo "<a href='/index.php' class='btn btn-success btn-lg'>На главную</a>";

		}
		else 
		{
			echo "Не верный логин или пароль";
			echo "<a href='/login_form.php' class='btn btn-success btn-lg'>Login</a>";
		}
	}	

?>

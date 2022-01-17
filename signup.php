<?php 
	
    if (count($_REQUEST > 0)) {
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
		}
		else {
			exit('Не верно заполнен эмэйл!' . "<a href='/signup_form.php' class='btn btn-success btn-lg'>Sign up</a>");
		}

		if (strlen($username)<2)
		{
			exit('Не верное имя!' . "<a href='/signup_form.php' class='btn btn-success btn-lg'>Sign up</a>");
		}

		if (strlen($password)<4) 
		{
			exit('Пароль должен иметь больше 4х символов!' . "<a href='/signup_form.php' class='btn btn-success btn-lg'>Sign up</a>");
		}	
		$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
		$statement = $pdo->query("INSERT INTO users (email, user_name, password) VALUES ('$email', '$username', '$password')");
		echo "Регистрация успешна";
	}	
		echo "<a href='/login_form.php' class='btn btn-success btn-lg'>Login</a>";
	
?>

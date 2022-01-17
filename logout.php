<?php
	
	session_start();

	unset($_SESSION['user_id']);
	unset($_SESSION['username']);
	echo "<a href='/index.php' class='btn btn-success btn-lg'>На главную</a>";
?>	
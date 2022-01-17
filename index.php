<?php 
	
	session_start();			

	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query('SELECT * FROM posts');
	$posts  = $statement->fetchAll(PDO::FETCH_ASSOC);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<a href="/login_form.php" class="btn btn-success btn-lg">Login</a>
		<a href="/signup_form.php" class="btn btn-success btn-lg">Sign up</a><br><br>
		<?php if (isset($_SESSION['user_id'])):?>
		<a href="/logout.php" class="btn btn-danger btn-lg">Logout</a><br><br>
		<?php endif;?>
		<div class="row">
			<?php foreach ($posts as $post) :?>

				<div class="col-md-4">
					<h2><?php echo $post["name"];?></h2>
					<p><?php echo $post["description"];?></p>
					<img src="/images/<?php echo $post['image'];?>" width="100" height="100" alt=""><br><br>


			<a href="/select.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Read more</a><br>	
				<?php if ($_SESSION['user_id'] == $post['user_id']):?>

				<a href="/edit.php?id=<?php echo $post['id'] ?>" class="btn btn-outline-warning">Edit</a><br>
				<a href="/delete.php?id=<?php echo $post['id'] ?>&image=<?php echo $post['image'] ?>" 
                 class="btn btn-outline-danger">Delete</i></a>
             <?php endif;?>
				</div>
				



			<?php endforeach;?>
		</div>
		<br><br>
		<a href="/form.php" class="btn btn-warning">Create</a>
	</div>

</body>
</html>
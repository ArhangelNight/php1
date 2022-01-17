<?php 

	$pdo = new PDO('mysql:host=localhost;dbname=php_course','root', '');
	$statement = $pdo->query('SELECT * FROM posts');
	$posts  = $statement->fetchAll(PDO::FETCH_ASSOC);
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($posts as $post) :?>

				<div class="col-md-4">
					<h2><?php echo $post["name"];?></h2>
					<p><?php echo $post["description"];?></p>
					<a href="#">Читать далее</a>
				</div>

			<?php endforeach;?>

	<?php /*		
			<div class="col-md-4">
				<h2><?php echo $posts[0]["title"];?></h2>
				<p><?php echo $posts[0]["desc"];?></p>
				<a href="#">Читать далее</a>
			</div>
			<div class="col-md-4">
				<h2><?php echo $posts[1]["title"];?></h2>
				<p><?php echo $posts[1]["desc"];?></p>
				<a href="#">Читать далее</a>
			</div>
			<div class="col-md-4">
				<h2><?php echo $posts[2]["title"];?></h2>
				<p><?php echo $posts[2]["desc"];?></p>
				<a href="#">Читать далее</a>
			</div>

		так было с добавкой php без циклов	
			
			<div class="col-md-4">
				<h2>Изучение PHP, ступень первая</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur inventore in incidunt ducimus eaque eum.
				</p>
				<a href="#">Читать далее</a>
			</div>
			<div class="col-md-4">
				<h2>Изучение PHP, ступень первая</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur inventore in incidunt ducimus eaque eum.
				</p>
				<a href="#">Читать далее</a>
			</div>

		так было изначально на чистом html

	*/ ?>
		</div>
	</div>

</body>
</html>
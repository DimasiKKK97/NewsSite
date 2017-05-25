<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/../style.css">
	<title>Новости</title>
</head>
<body>
	<?php foreach($articles as $news):?>
	<div>
		<h2><?php echo $news['title']; ?></h2><br>
		<p class="date"><?php echo $news['date']; ?></p><br>
		<a href="showonenews.php?id=<?php echo $news['id'] ?>">Читать далее...</a>
	</div>
	<br>
	<?php endforeach; ?>

	<hr align="left" width="300px" size="1" color="#000" />
	<br>

	<form action="addnews.php" method="post">
		<p>
			Заголовок:<br>
			<input type="text" name="title" size="35">
		</p>
		<p>
			Текст:<br>
			<textarea name="text" cols="40" rows="4"></textarea>
		</p>
		<input class="sub" type="submit" value="Отправить">
	</form>
</body>
</html>
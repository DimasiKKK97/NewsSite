<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Новости</title>
</head>
<body>
	<?php foreach($news as $new):?>
	<div>
		<?php echo $new['title']; ?><br>
		<?php echo $new['date'];  ?><br>
		<?php echo $new['textn']; ?><br>
	</div>
	<br>
	<?php endforeach; ?>

	<hr align="left" width="300px" size="1" color="#000" />

	<br>

	<form action="addnews.php" method="post">
		Заголовок<input type="text" id="title"><br>
		Текст<input type="text" id="text"><br>
		<input type="submit" value="Отправить">
	</form>
</body>
</html>
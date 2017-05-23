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
</body>
</html>
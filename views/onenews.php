<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/../style.css">
	<title>Document</title>
</head>
<body>
	<?php foreach($article as $news): ?>
	<div>
		<h2><?php echo $news['title']; ?></h2><br>
		<p class="date"><?php echo $news['date']; ?></p><br>
		<p><?php echo $news['textn']; ?></p>
		<a href="/../index.php">На главную</a>
	</div>
	<?php endforeach; ?>
</body>
</html>
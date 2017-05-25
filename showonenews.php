<?php

require __DIR__ . '/models/news_class.php';

$id = $_GET['id'];

$art = new News();
$article = $art->getoneNews($id);

require __DIR__ . '/views/onenews.php';
	
?>
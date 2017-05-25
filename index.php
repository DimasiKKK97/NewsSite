<?php 

require __DIR__ . '/models/news_class.php';

$n = new News();
$articles = $n->showNews();

if(empty($articles)){
	header('Location: /views/form.php');
	exit;
}

require __DIR__ . '/views/main.php';

?>
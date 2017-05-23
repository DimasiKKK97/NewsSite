<?php 

require __DIR__ . '/models/news_class.php';

$n = new News();
$news = $n->showNews();

require __DIR__ . '/views/main.php';

?>
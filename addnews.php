<?php 
	
	require '/models/news_class.php';

	if(empty($_POST['title'] || empty($_POST['text']))){
		header('Location: index.php');
		exit;
	}

	
	$title = $_POST['title'];
	$text = $_POST['text'];

	$addnew = new News();
	$addnew->addNews($title, $text);

	header('Location: /index.php');
	
?>
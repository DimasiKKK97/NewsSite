<?php

 require __DIR__ . '/../functions/sql_class.php';

class News{

	private $title;
	private $text;

	public function showNews(){
		$query = 'SELECT * FROM news';
		$shown = new Sql();
		$data = $shown->query($query);
		return $data;
	}

	public function addNews($title, $text){
		$query = 'INSERT INTO news (title, textn) VALUES ("' . $title .'" , "' . $text . '")';
		$addn = new Sql();
		$addn->queryadd($query);
	}


}
?>
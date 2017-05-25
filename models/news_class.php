<?php

 require __DIR__ . '/../functions/sql_class.php';

class News{

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
	public function getoneNews($id){
		$query = 'SELECT * FROM news WHERE id="' . $id . '"';
		$showone = new Sql();
		$data = $showone->query($query);
		return $data;
	}

}
?>
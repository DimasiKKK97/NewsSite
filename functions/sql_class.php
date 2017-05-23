<?php 

class Sql{

	public function __construct(){
		$server = 'localhost';
		$password = '';
		$login = 'root';
		$dbname = 'news_site';
		mysql_connect($server, $login, $password);
		mysql_select_db($dbname);
	}

	public function query($query){
		$res = mysql_query($query);
		$data = [];

		while(false != ($str = mysql_fetch_array($res))){
			$data[] = $str;
		}

		return $data;
	}
}

 ?>

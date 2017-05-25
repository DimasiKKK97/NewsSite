<?php 

class Sql{
	private $server;
	private $password;
	private $login;
	private $dbname;

	public function __construct(){
		$this->server = 'localhost';
		$this->password = '';
		$this->login = 'root';
		$this->dbname = 'news_site';
		mysql_connect($this->server, $this->login, $this->password);
		mysql_select_db($this->dbname);
	}

	public function query($query){
		$res = mysql_query($query);
		$data = [];

		while(false != ($str = mysql_fetch_array($res))){
			$data[] = $str;
		}

		return $data;
	}

	public function queryadd($query){
		mysql_query($query);
	}
}

?>

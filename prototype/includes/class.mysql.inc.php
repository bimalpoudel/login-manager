<?php

class mysql
{
	private $connection=null;
	
	public function __construct()
	{
		#$this->connection = new mysqli('localhost', 'root', 'toor', 'login');
		$this->connection = mysql_connect('localhost', 'root', 'toor');
		mysql_select_db('login', $this->connection);
	}
	function query($sql)
	{
		$result_set = mysql_query($sql, $this->connection) or die(mysql_error());
		$row = mysql_fetch_assoc($result_set);
		print_r($row);
	}
}

?>
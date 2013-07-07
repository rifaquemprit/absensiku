<?php

class Connection 
{
	protected $host, $user, $password, $database;
	function __construct($args)
	{
		$this->host = $args['host'];
		$this->user = $args['user'];
		$this->password = $args['password'];
		$this->database = $args['db'];
		$this->connect();
	}
	
	
	protected function connect()
	{
		$connect  = mysql_connect($this->host,$this->user,$this->password);
		if($connect) 
		{
			mysql_select_db($this->database) or die(exit("Database tidak ditemukan"));
		}
		else exit("Tidak mengjangkau database");
	}

}
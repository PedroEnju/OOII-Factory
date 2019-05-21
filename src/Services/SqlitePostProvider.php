<?php

namespace Services;

use Contracts\PostProviderInterface;

class SqlitePostProvider implements PostProviderInterface {
	
	public function getUltimos()
	{
		$conn = new \PDO("sqlite:" . __DIR__ . "/../../db/posts.db");
		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		
		$sth = $conn->query("select * from postagens");
		$registros = $sth->fetchAll();
		$conn = null;
		return $registros;
	}
	
}
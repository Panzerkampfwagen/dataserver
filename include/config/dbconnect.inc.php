<?php
function Zotero_DBConnectAuth($db) {
	if ($db == 'master') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zoterotest_master';
		$user = 'root';
		$pass = 'SecurePassword';
	}
	else if ($db == 'shard') {
		$host = false;
		$port = false;
		$db = false;
		$user = 'root';
		$pass = 'SecurePassword';
	}
	else if ($db == 'id1') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zoterotest_ids';
		$user = 'root';
		$pass = 'SecurePassword';
	}

	else if ($db == 'id2') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zoterotest_ids';
		$user = 'root';
		$pass = 'SecurePassword';
	}

	else if ($db == 'www1') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zotero_www';
		$user = 'root';
		$pass = 'SecurePassword';
	}

	else if ($db == 'www2') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zotero_www';
		$user = 'root';
		$pass = 'SecurePassword';
	}

	else if ($db == 'cache') {
		$host = 'localhost';
		$port = 3306;
		$db = 'zotero_cache';
		$user = 'root';
		$pass = 'SecurePassword';
	}

	else {
		throw new Exception("Invalid db '$db'");
	}
	return array('host'=>$host, 'port'=>$port, 'db'=>$db, 'user'=>$user, 'pass'=>$pass);
}
?>

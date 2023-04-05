<?php

	function conexion(){

	$host = "host=containers-us-west-40.railway.app";
	$port = "port=5965";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=ImXWTfnoVNeO4Av9eXLI";
	
	$db = pg_connect("$host $port $dbname $user $password");

    return $db;
}
?>
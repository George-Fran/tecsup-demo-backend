<?php
	function conexion(){
	$host = "host=containers-us-west-142.railway.app";
	$port = "port=6866";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=ycdzUNfIO6sYi9DFyFCK";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>
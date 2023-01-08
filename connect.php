<?php
	$db_server = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "movie-rating";
	$db_conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
	
	if(!$db_conn){
		die("Error database connection:".db_conn_error());
	}

?>
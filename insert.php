<?php
	include_once 'connect.php';

	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$year = $_POST['year']; 
        $director = $_POST['director']; 
		$nsql = "INSERT INTO movie (title,year,director) VALUES ('$title','$year','director')";
		if(mysqli_query($db_conn, $nsql)){
		
			header("location:crud.php");
		}else{
			echo "failed to insert data";
		}
	}
?>




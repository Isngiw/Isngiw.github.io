<?php
	include_once 'connect.php';

	if(isset($_POST['insertuser'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password']; 
		$nsql = "INSERT INTO review (name,username,password,type) VALUES ('$name','$username','$password','Client')";
		if(mysqli_query($db_conn, $nsql)){
            echo " insert data";
			header("location:index.php");
		}else{

			echo "failed to insert data";
		}
	}
?>
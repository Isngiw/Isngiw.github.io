

<?php
	include_once 'connect.php';

	if(isset($_POST['ratemov'])){
		$rID = $_POST['rID'];
		$mID = $_POST['mID'];
		$stars = $_POST['stars']; 

		$query=" INSERT INTO rating(mID, rID, stars )
		VALUES(( SELECT mID FROM movie WHERE movie.mID = '$mID'),( SELECT rID FROM review WHERE review.rID = '$rID'), '$stars') ";

		if(mysqli_query($db_conn, $query)){
            echo " insert data";
			header("location:cindex.php");
		}else{

			echo "failed to insert data";
		}
	}
?>
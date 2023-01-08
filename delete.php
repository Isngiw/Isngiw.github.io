<?php
include_once 'connect.php';

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $dsql = "DELETE FROM movie WHERE mID ='$id'";
    $query_run = mysqli_query($db_conn, $dsql);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:crud.php");
       
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}  




?>



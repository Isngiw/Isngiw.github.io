<?php
include_once 'connect.php';

session_start();
if(isset($_POST['login']))
{
   
    extract($_POST);
    $sql=mysqli_query($db_conn,"SELECT * FROM review where username='$username' and password ='$password' and type='Client' ");
    $row= mysqli_fetch_array($sql);
    if(is_array($row))
    { 
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
        header("Location: crud.php"); 
    }


    $asql=mysqli_query($db_conn,"SELECT * FROM review where username='$username' and password ='$password' and type='admin' ");
    $row1= mysqli_fetch_array($asql);

    if(is_array($row1))
    {

        $_SESSION["username"]=$row1['username'];
        $_SESSION["password"]=$row1['password'];
        header("Location: crud.php"); 
    }   

    else {

        header('Refresh:.01 ; URL=index.php');
        echo '<script> alert("Invalid username or password") </script>';
    }

} 

?>









<?php
include_once 'connect.php';

    if(isset($_POST['rating']))
    {   
        $mID = $_POST['update_id'];
        $stars=$_POST['rating'];
        
       
        $query = "INSERT INTO rating (`stars`) values (['$stars']) WHERE mID='$mID'  ";
        $query_run = mysqli_query($db_conn,$query);

        if($db_conn)
        {
           

            header('Refresh:.01 ; URL=cindex.php');
             echo '<script> alert("Successfully rated") </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>


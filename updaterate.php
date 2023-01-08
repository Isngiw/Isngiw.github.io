
<?php
include_once 'connect.php';

    if(isset($_POST['submit']))
    {   
        $mID = $_POST['update_id'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        $director = $_POST['director'];
        $stars = $_POST['stars'];
      
       
        $query = "UPDATE `movie` SET `title`='$title',`year`='$year',`director`='$director'  WHERE mID='$mID'";
        $query = "UPDATE `rating` SET `stars`='$stars'  WHERE mID='$mID'";

    

  
        $query_run = mysqli_query($db_conn,$query);

        if($db_conn)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:cindex.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

<?php



include_once 'connect.php';

$test=array();
$count=0;

$res=mysqli_query($db_conn,"SELECT `title`,`stars` FROM view2 ORDER BY stars ASC");
while ($row=mysqli_fetch_array($res)){



    $test[$count]["label"]=$row["title"];
    $test[$count]["y"]=$row["stars"];
   
    $count=$count+1;
}



?>
<!DOCTYPE HTML>
<html>
<head>
<script>
    window.onload = function() {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: "Movie Rating Summary"
        },
        axisY: {
            title: "Number of Stars (Rating)"
        },
        data: [{
            type: "bar",
            yValueFormatString: "Stars",
            dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    }
</script>
</head>
<body>

    


<div id="chartContainer" style="height: 420px; width: 70%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   
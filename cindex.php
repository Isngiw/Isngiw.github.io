<?php
  include_once 'connect.php';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP CRUD with Bootstrap Modal </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  </head>
  <style>
    body{
    background: rgb(242,242,242);
    background: linear-gradient(78deg, rgba(242,242,242,1) 0%, rgba(196,196,221,1) 100%, rgba(0,212,255,1) 100%);
    }
  </style>
  <body>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Movie Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="insert.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label> Movie Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter movie title">
              </div>
              <div class="form-group">
                <label> Year Released </label>
                <input type="text" name="year" class="form-control" placeholder="Enter Year Released">
              </div>
              <div class="form-group">
                <label> Director </label>
                <input type="text" name="director" class="form-control" placeholder="Enter Movie Director">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--RATING SUMMARY-->
    <div class="modal fade" id="ratesummary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate Movie</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="ratemovie.php" method="POST">
            <div class="modal-body">
              <?php                 
                $sql = "SELECT * FROM `movie`";    
                $name = mysqli_query($db_conn,$sql);
                ?>
              <select class="form-select" name="mID" >
                <option select> ---Select name--- </option>
                <?php
                  while ($title = mysqli_fetch_array($name)){
                  ?>
                <option  > <?php echo $title['mID'];?>  <?php echo $title['title'];?>                                                  
                </option>
                <?php
                  }
                  
                  ?>
              </select>
              <div class="form-group">
                <label> Rating </label>
                <input type="text" name="stars" class="form-control" placeholder="Maximum of 5 stars and minimum of 1 star">
              </div>
              <?php                 
                $sql = "SELECT * FROM `review`";    
                $name = mysqli_query($db_conn,$sql);
                ?>
              <select class="form-select" name="rID" >
                <option select> ---Select name--- </option>
                <?php
                  while ($title = mysqli_fetch_array($name)){
                  ?>
                <option  > <?php echo $title['rID'];?> <?php echo $title['name'];?>                                                   
                </option>
                <?php
                  }
                  
                  ?>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="ratemov" name="ratemov" class="btn btn-primary">Rate now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--GRAPH MODAL-->
    <div class="modal fade" id="rategraph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true" >
      <div class="modal-dialog"  role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Movie Rating summary </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Update Movie Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="updaterate.php" method="POST">
            <div class="modal-body">
              <input type="hidden" name="update_id" id="update_id">
              <div class="form-group">
                <label> Movie Title </label>
                <input type="text" name="title" id="title" class="form-control">
              </div>
              <div class="form-group">
                <label> Year Released </label>
                <input type="text" name="year" id="year" class="form-control">
              </div>
              <div class="form-group">
                <label> Director </label>
                <input type="text" name="director" id="director" class="form-control">
              </div>
              <div class="form-group">
                <label> Rating </label>
                <input type="text" name="stars" id="stars" class="form-control">
              </div>
              <div class="form-group">
                <label> Reviewer </label>
                <input type="text" name="name" id="name" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit"  id ="submit" name="submit" class="btn btn-primary">Update Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Remove Movie data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="deleterate.php" method="POST">
            <div class="modal-body">
              <input type="hidden" name="delete_id" id="delete_id">
              <h4> Do you want to Remove  Data?</h4>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
              <button type="submit" name="deletedata" id="deletedata" class="btn btn-primary"> Yes, Delete it </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <style>
      h2{
      margin-left: 20px !important;
      }
    </style>
    <!--CHART START-->
    <?php
      $test=array();
      $count=0;
      $res=mysqli_query($db_conn,"SELECT `title`,`stars` FROM view2 ORDER BY stars ASC");
      while ($row=mysqli_fetch_array($res)){
      
          $test[$count]["label"]=$row["title"];
          $test[$count]["y"]=$row["stars"];
      
          $count=$count+1;
      }
      
      ?>
    <script>
      window.onload = function() {
      
      var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "light2",
          title:{
              text: "Movie Rating Graph"
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
    <div id="chartContainer" style="height: 420px; width: 70.6%; margin-left: 32px; margin-top: 21px;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <!--CHART END-->
    <!---------TOP MOVIES-->
    <div class="container" style="width: 400px !important;   margin-top: -421px ;margin-left: 1098px; " >
      <div class="card">
        &nbsp;
        <h2>Top rated movie </h2>
      </div>
      <div class="card">
        <div class="card-body" style="height: 348px !important;">
          <?php                 
            $nsql="SELECT DISTINCT `title`, `stars` from view3 WHERE stars>2  ORDER BY stars desc limit 5";
            $result=mysqli_query($db_conn,$nsql);
            ?>
          <table id="datatableid" class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">Movie Title</th>
                <th scope="col"> Rating </th>
              </tr>
            </thead>
            <?php
              if($result)
              {
                  foreach($result as $row)
                  {
              ?>
            <tbody>
              <tr>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['stars']; ?> stars </td>
              </tr>
            </tbody>
            <?php           
              }
              }
              else 
              {
              echo "No Record Found";
              }
              ?>
          </table>
        </div>
      </div>
    </div>
    </div>
    <!------------------MAIN CONTENT----------------------->
    <div class="jumbotron" style=" background: rgb(242,242,242);
      background: linear-gradient(78deg, rgba(242,242,242,1) 0%, rgba(196,196,221,1) 100%, rgba(0,212,255,1) 100%);
      margin-left: 10 px!important; margin-top: -55px !important">
    <div class="fluid" >
      <div class="card">
        &nbsp;
        <h2>Rating Summary </h2>
      </div>
      <div class="card">
        <div class="card-body">
          <button type="button   " class="btn btn-primary" data-toggle="modal" data-target="#ratesummary">
          RATE MOVIE
          </button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <?php
            $nsql="SELECT distinct `mID`,`title`,`year`,`director`,`stars`,`name` from view4 ";
            $result=mysqli_query($db_conn,$nsql);
            ?>
          <table id="datatableid" class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col"> Movie Code</th>
                <th scope="col">Movie Title</th>
                <th scope="col">Year Released</th>
                <th scope="col"> Director </th>
                <th scope="col"> Rating </th>
                <th scope="col"> Reviewer </th>
                <th scope="col"> EDIT </th>
                <th scope="col"> DELETE </th>
              </tr>
            </thead>
            <?php
              if($result)
              {
                  foreach($result as $row)
                  {
              ?>
            <tbody>
              <tr>
                <td> <?php echo $row['mID']; ?> </td>
                <td> <?php echo $row['title']; ?> </td>
                <td> <?php echo $row['year']; ?> </td>
                <td> <?php echo $row['director']; ?> </td>
                <td> <?php echo $row['stars']; ?> Stars </td>
                <td> <?php echo $row['name']; ?> </td>
                <td>
                  <button type="button" name="delete" class="btn btn-success editbtn"> EDIT </button>                                   
                </td>
                <td>
                  <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                </td>
              </tr>
            </tbody>
            <?php           
              }
              }
              else 
              {
              echo "No Record Found";
              }
              ?>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!--script>
      $(document).ready(function () {
      
          $('.viewbtn').on('click', function () {
              $('#viewmodal').modal('show');
              $.ajax({ //create an ajax request to display.php
                  type: "GET",
                  url: "display.php",
                  dataType: "html", //expect html to be returned                
                  success: function (response) {
                      $("#responsecontainer").html(response);
                      //alert(response);
                  }
              });
          });
      
      });
      </script-->
    <!--script>
      $(document).ready(function () {
      
          $('#datatableid').DataTable({
              "pagingType": "full_numbers", //search
                  type: "GET",
              "lengthMenu": [
                  [10, 25, 50, -1],
                  [10, 25, 50, "All"]
              ],
              responsive: true,
              language: {
                  search: "_INPUT_",
                  searchPlaceholder: "Search Your Data",
              }
          });
      
      });
      </script-->
    <script>
      $(document).ready(function () {
      
          $('.deletebtn').on('click', function () {
      
              $('#deletemodal').modal('show');
      
              $tr = $(this).closest('tr');
      
              var data = $tr.children("td").map(function () {
                  return $(this).text();
              }).get();
      
              console.log(data);
      
              $('#delete_id').val(data[0]);
      
          });
      });
    </script>
    <script>
      $(document).ready(function () {
      
          $('.editbtn').on('click', function () {
      
              $('#editmodal').modal('show');
      
              $tr = $(this).closest('tr');
      
              var data = $tr.children("td").map(function () {
                  return $(this).text();
              }).get();
      
              console.log(data);
      
              $('#update_id').val(data[0]);
              $('#title').val(data[1]);
              $('#year').val(data[2]);
              $('#director').val(data[3]);
              $('#stars').val(data[4]);
              $('#name').val(data[5]);
              
          });
      });
    </script>
  </body>
</html>
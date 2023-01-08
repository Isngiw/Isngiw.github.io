<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  </head>
  <style>
    .bg 
    {
    background: rgb(242,242,242);
    background: linear-gradient(78deg, rgba(242,242,242,1) 0%, rgba(196,196,221,1) 100%, rgba(0,212,255,1) 100%);
    }
    .container
    {
    margin-top: 120px;
    }
  </style>
  <body class="bg">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12 d-none d-lg-block "></div>
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                    <form action="login.php" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                          id="username" name="username" placeholder="Enter Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      </div>
                      <button type="submit" id="login" name="login" class="btn btn-primary btn-user btn-block">Log In</button>
                    </form>
                    <hr>
                    <div class="text-center">
                      <a class="small editbtn" data-toggle="modal" data-target="#rategraph" style="text-decoration: none">Create an Account</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--L-->
    <!-- Modal -->
    <div class="modal fade" id="rategraph" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="newuser.php">
            <div class="modal-body">
              <div class="form-group">
                <label> Fullname </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Fullname">
              </div>
              <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label> Password </label>
                <input type="text" name="password" class="form-control" placeholder="Enter Password">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="insertuser" name="insertuser" class="btn btn-primary">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function () {
      
          $('.small editbtn').on('click', function () {
              $('#small editbtn').modal('show');
              $tr = $(this).closest('tr');
              var data = $tr.children("td").map(function () {
                  return $(this).text();
              }).get();
          });
      });
      
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
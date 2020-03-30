<?php
$con = mysqli_connect('fdb17.biz.nf', '2412678_yudongweb', 'sxbsyd123', '2412678_yudongweb');
if (isset($_POST['register'])) {
    session_start();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $money = $_POST['money'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $check = $con->query($query);
    $num = $check->num_rows;
    if ($num != 0) {
        echo "<script>alert('the username already exist.')</script>";
    }

    if ($password == $password2) {
        
        $sql = "INSERT INTO users(id, first_name, last_name, email, username, password, money)
                VALUE (NULL, '$first_name', '$last_name', '$email', '$username', '$password', $money)";
        $con->query($sql);
        $_SESSION['message'] = "you are logged in";
        $_SESSION['username'] = $username;
        header("location: lindex.php");
    } else {
        echo "<script>alert('the confirm password is incorrect.')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>welcome to yudongWeb</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/keren.css" rel="stylesheet">


</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">YudongWeb</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav ">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="register.php">register an Account</a></li>

            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>



<br>
<div class="container" >
    <div class="row">
        <div class="row">
            <div class= "col-md-4" >
                <div class="cart-block">
                    <h3 style="padding: 5px"><strong>Welcome to YudongWeb</strong></h3>
                    <br>
                    <h5 style="padding: 5px">a personal bookstore</h5>
                </div>
                <br>
                <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Category</div>


  <!-- List group -->
  <ul class="list-group">
      <li class="list-group-item"><a href="vc1.php">HTML CSS Javascript</a></li>
      <li class="list-group-item"><a href="vc2.php">Machine Learning</a>/li>
      <li class="list-group-item"><a href="vc3.php">Operating System</a></li>
      <li class="list-group-item"><a href="vc4.php">Mobile Development</a></li>
      <li class="list-group-item"><a href="vc5.php">MySQL php related</a></li>
  </ul>
</div>
                <div>
                    <img src="img/webh.jpg">
                </div>
            </div>
            <div class= "col-md-8" >
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Create an Account</h3></div>
                    <div class="panel-body">
                        <form  method="post" action="register.php">
                            <div class="form-group">
                                <labe>First Name*</labe>
                                <input type="text" name="first_name" class="form-control" placeholder="Enter Fisrt Name">
                            </div>
                            <div class="form-group">
                                <labe>Last Name*</labe>
                                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <labe>Email*</labe>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <labe>Username*</labe>
                                <input type="text" name="username" class="form-control" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <labe>Password*</labe>
                                <input type="text" name="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <labe>Confirm Password*</labe>
                                <input type="text" name="password2" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <labe>Money*</labe>
                                <input type="text" name="money" class="form-control" placeholder="Enter the money you can spend">
                            </div>
                            <input type="submit" name="register" value="Register">


                        </form>
                    </div>


                </div>
            </div>
        </div>

    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>


<?php
$con = mysqli_connect('remotemysql.com', 'HDUhlHSVId', 'pCyPrxpWve', 'HDUhlHSVId');

$products = "SELECT * FROM products";
$grab = $con->query($products);

if (isset($_POST['login'])) {
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $con->query($sql);
    $num = $result->num_rows;
    if ($num == 1) {
        $_SESSION['message'] = 'you are logged in';
        $_SESSION['username'] = $username;
        header("location: lindex.php");
    } else {

        echo "<script>alert('the password is incorrect or the username does not exist.')</script>";
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
            <form action="index.php" method="post" class="navbar-form navbar-right">
        <div class="form-group">
          <input name="username" type="text" class="form-control" placeholder="Enter username">
          <input name="password" type="text" class="form-control" placeholder="Enter password">
            <input type="submit" name = "login" value="Login">
        </div>

      </form>
        </div><!--/.nav-collapse -->
    </div>
</nav>



<br>
<div class="container" >
    <div class="row">
        <div class="row">
            <div class= "col-md-4" >
                <div class="cart-block" style="background: gold; border: solid 2px;">
                    <h3 style="padding: 5px"><strong>Welcome to YudongWeb</strong></h3>
                    <br>
                    <h5>a personal bookstore</h5>
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
                    <div class="panel-heading"><h3>Books on Sale</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <?php while ($row = mysqli_fetch_assoc($grab)): ?>
                                <div class="col-md-4 game">
                                    <div>Price: $<?php echo $row['price']; ?></div>
                                    <img src="img/<?php echo $row['image']; ?>" height="160px" width="120px%">
                                    <div>Title: <?php echo $row['title']; ?></div>

                                </div>

                            <? endwhile;?>


                        </div>
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

<script src="js/bootstrap.js"></script>

</body>
</html>
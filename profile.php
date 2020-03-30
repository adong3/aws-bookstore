<?php
session_start();
$username = $_SESSION['username'];

$con = mysqli_connect('fdb17.biz.nf', '2412678_yudongweb', 'sxbsyd123', '2412678_yudongweb');
$sql1 = "SELECT * FROM users WHERE username = '$username'";
$sql2 = "SELECT * FROM orders WHERE username = '$username'";
$result1 = $con->query($sql1);
$result2 = $con->query($sql2);

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
                <li class="active"><a href="lindex.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>



            </ul>

            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <p style="color: white">Welcome <?php echo $_SESSION['username'];
                        ?></p>
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
                <div class="cart-block">
                    <img src="img/user.jpg" height="80%" width="80%">
                    <br>
                    <a href="profile.php"><h3>Check your Account</h3></a>
                </div>
                <br>
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Category</div>


                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item"><a href="yc1.php">HTML CSS Javascript</a></li>
                        <li class="list-group-item"><a href="yc2.php">Machine Learning</a>/li>
                        <li class="list-group-item"><a href="yc3.php">Operating System</a></li>
                        <li class="list-group-item"><a href="yc4.php">Mobile Development</a></li>
                        <li class="list-group-item"><a href="yc5.php">MySQL php related</a></li>
                    </ul>
                </div>
                <div>
                    <img src="img/webh.jpg">
                </div>
            </div>
            <div class= "col-md-8" >
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><h3>Profile</h3></div>
                    <div class="panel-body">
                        <div style="height: 200px; width: 80%; margin: auto; border: dashed 2px; overflow: auto">
                            <ul>
                                <?php while ($row1 = mysqli_fetch_assoc($result1)): ?>
                                    <li ><p style="border-bottom: dashed 1px">Name: <?php echo $row1['username'] ?></p> </li>
                                    <li ><p style="border-bottom: dashed 1px">Password: <?php echo $row1['password'] ?></p> </li>
                                    <li ><p style="border-bottom: dashed 1px">Email: <?php echo $row1['email'] ?></p> </li>
                                    <li ><p style="border-bottom: dashed 1px">First Name: <?php echo $row1['first_name'] ?></p> </li>
                                    <li ><p style="border-bottom: dashed 1px">Last Name: <?php echo $row1['last_name'] ?></p> </li>
                                <? endwhile;?>
                            </ul>
                        </div>
                        <br>
                        <br>
                        <div style="height: 200px; width: 80%; margin: auto; border: dashed 2px; overflow: auto">
                            <ul>
                                <?php while ($row2 = mysqli_fetch_assoc($result2)): ?>
                                    <li ><p style="border-bottom: dashed 1px">Price: 280$, Book Name: <?php echo $row2['product_name'] ?></p> </li>

                                <? endwhile;?>
                            </ul>
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
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
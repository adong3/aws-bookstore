<?php
session_start();

$con = mysqli_connect('fdb17.biz.nf', '2412678_yudongweb', 'sxbsyd123', '2412678_yudongweb');
if (isset($_POST['confirm'])) {

    $product_name = $_POST['product'];

    
    $username = $_SESSION['username'];
    $address = $_POST['address'];



        $sql = "INSERT INTO orders(id, product_name, username, qty, price, address)
                VALUE (NULL, '$product_name', '$username', '1', 280, '$address')";
        $con->query($sql);

    
        header("location: lindex.php");

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
                    <div class="panel-heading"><h5>Place an Order |</h5><a href="lindex.php"><h5> Books on Sale</h5></a></div>
                    <div class="panel-body">
                        <form  method="post" action="order.php">
                            <div class="form-group">
                                <labe>Book Name*</labe>
                                <input type="text" name="product" class="form-control" placeholder="Enter Book Name">
                            </div>
                            <div class="form-group">
                                <labe>Address* (include city, state and zipcode)</labe>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address">
                            </div>
                            

                            <input type="submit" name="confirm" value="Confirm">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h4>Please send money to sxbsyd123@163.com via PayPal</h4>
                            <h5>PS:I will delete the order from your profile and send the books to you,
                                    If the total price of your orders exceeds the money you can spend, you may receive
                                    notification email </h5>


                        </form>
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
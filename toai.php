<?php
$con = mysqli_connect('remotemysql.com', 'HDUhlHSVId', 'pCyPrxpWve', 'HDUhlHSVId');

$products = "SELECT * FROM products";
$grab = $con->query($products);



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
    Yes it works fine now.

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
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

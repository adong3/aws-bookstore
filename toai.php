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


    <?php while ($row = mysqli_fetch_assoc($grab)) : ?>

        <div>Price: $<?php echo $row['price']; ?></div>
        <img src="img/<?php echo $row['image']; ?>" height="160px" width="120px%">
        <div>Title: <?php echo $row['title']; ?></div>



    <? endwhile; ?>









    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
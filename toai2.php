<?php include "dbinfo.php";
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
$con = mysqli_select_db($connection, DB_DATABASE);

$products = "SELECT * FROM products";
$grab = mysqli_query($connection, $products);



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


    <?php while ($row1 = mysqli_fetch_assoc($result1)) : ?>
        <li>
            <p style="border-bottom: dashed 1px">Name: <?php echo $row1['username'] ?></p>
        </li>
        <li>
            <p style="border-bottom: dashed 1px">Password: <?php echo $row1['password'] ?></p>
        </li>
        <li>
            <p style="border-bottom: dashed 1px">Email: <?php echo $row1['email'] ?></p>
        </li>
        <li>
            <p style="border-bottom: dashed 1px">First Name: <?php echo $row1['first_name'] ?></p>
        </li>
        <li>
            <p style="border-bottom: dashed 1px">Last Name: <?php echo $row1['last_name'] ?></p>
        </li>
    <? endwhile; ?>

    <?php while ($row1 = mysqli_fetch_assoc($result1)) {
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">Name:" . $row1['username'] . "</p></li>";
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">Password:" . $row1['password'] . "</p></li>";
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">Email:" . $row1['email'] . "</p></li>";
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">First Name:" . $row1['first_name'] . "</p></li>";
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">Last Name:" . $row1['last_name'] . "</p></li>";
    }
    ?>

    <?php while ($row2 = mysqli_fetch_assoc($result2)) : ?>
        <li>
            <p style="border-bottom: dashed 1px">Price: 280$, Book Name: <?php echo $row2['product_name'] ?></p>
        </li>

    <? endwhile; ?>

    <?php while ($row2 = mysqli_fetch_assoc($result2)) {
        echo "<li>
        <p style=\"border-bottom: dashed 1px\">Price: 280$, Book Name:" . $row2['product_name'] . "</p>
        </li>";
    }
    ?>









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
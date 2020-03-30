<?php
$con = mysqli_connect('remotemysql.com', 'HDUhlHSVId', 'pCyPrxpWve', 'HDUhlHSVId');

$products = "SELECT * FROM products";
$grab = $con->query($products);

if (!$con) {
    echo "fail";
} else {
    echo "succeed";
}

?>
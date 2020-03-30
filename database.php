<?php  
	$conn = mysqli_connect('remotemysql.com', 'HDUhlHSVId', 'pCyPrxpWve', 'HDUhlHSVId');
	if (!$conn) {
		echo "fail";
	} else {
		echo "succeed";
	}



?>
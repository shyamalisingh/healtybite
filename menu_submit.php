<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Menu Creation</title>
</head>
<body>
	<?php
	
	$dbConnectLink= mysqli_connect("localhost","root","","healthy_bite");
		if($dbConnectLink->connect_error) {
			echo 'connetction failed';
			die ("connection failed: ". $dbConnectLink->connect_error);
		}
		$item= $_POST["item"];
		$mealType= $_POST["mealType"];
		$price= $_POST["price"];
		
		
		$sql ="INSERT INTO menu (item ,meal_type, price)
		VALUES ('$item', '$mealType', '$price')";
		
		if($dbConnectLink->query($sql)=== TRUE) {
			echo "new record created successfully";
			} else {
			echo "error" . $sql . "<br>" . $dbConnectLink->error;
			}
		$dbConnectLink->close();
	?>
		
</body>
</html>

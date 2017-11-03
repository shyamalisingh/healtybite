	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Registration Successful</title>
	</head>
	
	<body>
	<?php
		require("db_connect.php");
	
		$firstName= $_POST["firstName"];
		$lastName= $_POST["lastName"];
		$gender= $_POST["gender"];
		$age= $_POST["age"];
		$weight= $_POST["weight"];
		$height= $_POST["height"];
		$dietType= $_POST["dietType"];
		$phoneNumber= $_POST["phoneNumber"];
		$email= $_POST["email"];
		$password=$_POST["password"];
				
		
		
		$sql = "INSERT INTO users (first_name, last_name, gender, age, weight, height, diet_type, phone_number, email, password)
		VALUES ('$firstName', '$lastName', '$gender', '$age', '$weight', '$height', '$dietType', '$phoneNumber', '$email',
		'$password')";
		//echo $sql;
		$result=$dbConnectLink->query($sql);
		if ($result=== TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $dbConnectLink->error;
		}
		$dbConnectLink->close();
		?>
	</body>
	</html>

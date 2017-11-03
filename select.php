<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Users List</title>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js">
</script>
<script src="js/user_validation.js">
</script>
</head>

<body>
	<?php
	
	$dbConnectLink=mysqli_connect("localhost","root","1J2c3e4e","healthy_bite");
	
		if ($dbConnectLink->connect_error) {
			echo 'connetction failed';
			die("Connection failed: " . $dbConnectLink->connect_error);
		} 
		
		$sql="SELECT user_id , first_name ,last_name, gender, age, weight, height, phone_number, email, password, diet_type FROM users";
		$result = $dbConnectLink->query($sql);
		
		if ($result->num_rows > 0) {
		echo "<table class='table'>";
		echo "<tr class='row active'>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "user_id";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "first_name";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "last_name";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "gender";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "age";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "weight";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "height";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "phone_number";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "email";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "password";
		echo "</th>";
		echo "<th class='col-md-1 col-sm-3 col-xs-12'>";
		echo "diet_type";
		echo "</th>";
		echo "</tr>";
		
		
		// output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr class='row'>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["user_id"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["first_name"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["last_name"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["gender"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["age"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["weight"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["height"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["phone_number"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["email"];
		echo "</td>";
		echo "<td class='col-md-1 col-sm-3 col-xs-12'>";
		echo $row["diet_type"];
		echo "</td>";
		echo "</tr>";
		
		}
		echo "</table>";	
	}else {
		echo "0=results";
	}
	$dbConnectLink->close();

		
		?>
		
	
</body>
</html>

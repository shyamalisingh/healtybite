<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
// Start the session
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Submit</title>
</head>
<body>

<?php
	
	$dbConnectLink= mysqli_connect("localhost","shammi","1J2c3e4e","healthy_bite");
		if($dbConnectLink->connect_error) {
			echo 'connection failed';
			die ("connection failed: ". $dbConnectLink->connect_error);
		}
		$userName= $_POST["userName"];
		$password= $_POST["password"];
		$button= $_POST["submit"];
		
		
		$sql ="select email,password,first_name,age from users where email = '$userName' and password = '$password'";
		
		$result=mysqli_query($dbConnectLink,$sql);
			$rowcount=mysqli_num_rows($result);
				if($rowcount==1){
				$row=mysqli_fetch_row($result);
    				
					$_SESSION["userName"] =$userName ;
					echo "welcome user";
					echo "<br/><br />";
					$_SESSION["first_name"] =$row[2] ;
					$_SESSION["age"] =$row[3] ;
					
					echo "<br/><br />";
					echo "<a href='menu_entry.php'>Go to Menu</a>";
				}
				else{
					echo "invalid user";
				}
				
			
		$dbConnectLink->close();
	?>

</body>
</html>

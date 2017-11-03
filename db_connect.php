
<?php
$dbConnectLink=mysqli_connect("localhost","shammi","1J2c3e4e","healthy_bite");
	
		if ($dbConnectLink->connect_error) {
			echo 'connection failed';
			die("Connection failed: " . $dbConnectLink->connect_error);
		} 
		
function writeMsg() {
    echo "Hello world!";
}
?>
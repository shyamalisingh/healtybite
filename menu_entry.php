	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<?php
     // Start the session
     session_start();
    ?>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Menu</title>
	</head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<script src="js/user_validation.js">
	</script>
	<body>
	<div class="container">
	  <div class="nav-tabs">
	  MENU ENTRY <?php
	  if(isset($_SESSION["userName"])){
	  	
		echo "Welcome: ".$_SESSION["first_name"];
		echo ",";
		echo $_SESSION["age"];
		?>
		<a href="logout.php">Logout</a>
	  <?php
	  }
	   ?>
	  <form id="form2" name="form2" method="post" action="">
	    
	    </form>
	  </div>
		<form id="form1" name="form1" method="post" action="menu_submit.php" class="form-group" onsubmit="return validateForm()">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<label>ITEM NAME :
					 	<input type="text" name="item" class="form-control" />
					</label>
				</div>
			</div>
			<div class="row">
			 	<div class="col-md-3 col-sm-6 col-xs-12">
					<label>MEAL TYPE :
						<input type="text" name="mealType" class="form-control" />
					</label>
				</div>
			</div>
			<div class="row">
			 	<div class="col-md-3 col-sm-6 col-xs-12">
					<label>PRICE :
						<input type="text" name="price" class="form-control" />
	  				</label>
	  			</div>
	  		</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<label>
						<input type="submit" name="menu_submit" value="submit" align="absmiddle" class="btn-primary" />
					</label>
				</div>
			</div>
		</form>
	</div>
	</body>
	</html>

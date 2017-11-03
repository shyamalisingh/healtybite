<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Register</title>
   </head>
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- Optional theme -->
   <link rel="stylesheet" href="css/bootstrap-theme.css">
   <!-- Latest compiled and minified JavaScript -->
   <script src="js/bootstrap.js"></script>
   <script src="js/user_validation.js"></script>
   <body>
      <div class="container">
         <div class="nav-tabs">
            HEALTHY BITE
         </div>
         <form id="form1" name="form1" method="post" action="login_submit.php" class="form-group">
            <div class="row">
               <div class="col-md-3">
                  <label for="userName">user name</label>
               </div>
			   <div class="col-md-3">
               		<input type="text" name="userName" id="userName" class="form-control" />
				</div>
             </div>
			 <div class="row">
			 <div class="col-md-6 col-sm-6 col-sx-6">
			 <br />
			 </div>
			 </div>
			 <div class="row">
				<div class="col-md-3">
               <label for="password">password</label>
			  </div>
			  <div class="col-lg-3">
               		<input type="password" name="password" id="password" class="form-control" />
				</div>	
			  </div>
			  <div class="row">
			  	<div class="col-md-1 col-sm-4 col-xs-12">
               <input type="submit" name="submit" value="login"class="btn-primary"/>
			    </div>
				<div class="col-md-1 col-sm-6 col-xs-12">
				 <a href="register.php" class="btn">SignUp</a>
               
			   </div>
			  </div>
         </form>
      </div>
   </body>
</html>
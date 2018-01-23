<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Menu Creation</title>
</head>
<body>
	<?php
		include "menu_class.php";
		for($i=0;$i<count($_POST["itemName"]);$i++)
		{
			$menu_item =new MenuItem($_POST["itemName"][$i],$_POST["mealType"][$i],$_POST["price"][$i]);
			$menu_item->placeOrder();	
		}
		
	?>
		
</body>
</html>

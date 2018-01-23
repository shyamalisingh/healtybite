<?php
class MenuItem{
	private $itemName;
	private $mealType;
	private $price;
	
		public function placeOrder()
			{
				echo "your order is:" .$this->itemName. "<br>";
				echo "your meal type is:" .$this->mealType. "<br>";
				echo "your bill is:" .$this->price;
				
					$dbConnectLink= mysqli_connect("localhost","root","","healthy_bite");
					if($dbConnectLink->connect_error) {
						echo 'connetction failed';
					die ("connection failed: ". $dbConnectLink->connect_error);
					}
					
					$sql ="INSERT INTO menu (item ,meal_type, price)
						VALUES ('$this->itemName', '$this->mealType', '$this->price')";
		
							if($dbConnectLink->query($sql)=== TRUE) {
								echo "new record created successfully";
								} else {
								echo "error" . $sql . "<br>" . $dbConnectLink->error;
								}
							$dbConnectLink->close();
							}
		public function __construct($itemName,$mealType,$price)
			{
				$this->itemName=$itemName;
				$this->mealType=$mealType;
				$this->price=$price;
				echo "<br>";
			}
		
		
}
?>
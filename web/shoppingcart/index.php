<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>03 Prove: Assignment- PHP Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>03 Prove: Assignment- PHP Shopping Cart</h2>

	<form method="get" action="cart.php">
		<button type="submit">View Cart</button>
	</form>
	
	<div class="product_box">
		<form method="post" action="">
			<img src="images/placeholder.jpg"><br>
			<h3>Product 1</h3>
			<p>Product description</p>
			<p>$20.00</p>
			<input type="submit" name="btn" class="button" value="Add to Cart">
	        <input type="hidden" name="action" value="product1">
		</form>
	</div>

	<div class="product_box">
		<form method="post" action="">
			<img src="images/placeholder.jpg"><br>
			<h3>Product2</h3>
			<p>Product description</p>
			<p>$22.00</p>
			<input type="submit" name="btn" class="button" value="Add to Cart">
	        <input type="hidden" name="action" value="product2">
		</form>
	</div>

	<div class="product_box">
		<img src="images/placeholder.jpg"><br>
		<h3>Product 3</h3>
		<p>Product description</p>
		<p>$18.00</p>
		<button>Add to Cart</button>
	</div>

	<div class="product_box">
		<img src="images/placeholder.jpg"><br>
		<h3>Product 4</h3>
		<p>Product description</p>
		<p>$15.00</p>
		<button>Add to Cart</button>
	</div>
</body>
</html>
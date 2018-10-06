<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>03 Prove: Assignment- Added to Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2>Shopping Cart</h2>
	<?php
		$_SESSION["product1"] = "product1";
	?>

	<?php
		$_SESSION["product2"] = "product2";
	?>

	<?php
		$_SESSION["product3"] = "product3";
	?>

	<?php
		$_SESSION["product4"] = "product4";
	?>

</body>
</html>
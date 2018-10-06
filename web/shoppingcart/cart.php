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
		$_SESSION["bumblee"] = "bumblebee";
	?>

</body>
</html>
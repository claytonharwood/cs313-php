<!DOCTYPE html>
<html>
<head>
	<title>03 Teach:Team Activity-Display Info</title>
</head>
<body>
	<h2>User Submitted Info:</h2>
		<p><strong>Name: </strong><?php echo $_POST['name'] ?></p>
        <p><strong>Email: </strong><a href="mailto:<?php echo $_POST['email'] ?>"><?php echo $_POST['email'] ?></a></p>
        <p><strong>Major: </strong><?php echo $_POST['major'] ?></p>
        <p><strong>Comments: </strong></p>
            <p><?php echo $_POST['comments'] ?></p>
        <p><strong>Continents Visited: </strong></p>
        	<ul>
                <?php 
                   foreach($_POST['continents'] as $item) {
                        echo '<li>'.$continents[$item].'</li>';
                   }
                ?>
            </ul>
</body>
</html>
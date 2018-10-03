<!DOCTYPE html>
<html>
<head>
	<title>03 Teach:Team Activity</title>
</head>
<body>
	<form action="display.php" method="post"  >
		<label>Name:</label>
			<input type="text" name="name"><br><br>
		<label>Email:</label>
			<input type="text" name="email"><br><br>
		<label>Major</label><br>
			<input type="radio" name="major" value="Computer Science">Computer Science<br>
  			<input type="radio" name="major" value="Web Design and Development">Web Design and Development<br>
  			<input type="radio" name="major" value="Computer information Technology">Computer information Technology<br>
  			<input type="radio" name="major" value="Computer Engineering">Computer Engineering<br><br>
  		<label>Comments</label><br>  
      		<textarea rows="4" cols="50" name="comment"></textarea><br><br>
        <label>Places you have visited</label><br>
        	<input type="checkbox" name="visited" value="North America">North America<br>
  			<input type="checkbox" name="visited" value="South America">South America<br>
  			<input type="checkbox" name="visited" value="Europe">Europe<br>
  			<input type="checkbox" name="visited" value="Asia">Asia<br>
  			<input type="checkbox" name="visited" value="Australia">Australia<br>
  			<input type="checkbox" name="visited" value="Africa">Africa<br>
  			<input type="checkbox" name="visited" value="Antarctica">Antarctica<br><br>
			<input type="submit" value="Submit">
	</form>
	
</body>
</html>
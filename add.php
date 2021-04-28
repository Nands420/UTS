<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Positif</td>
				<td><input type="text" name="positif"></td>
			</tr>
			<tr> 
				<td>Dirawat</td>
				<td><input type="text" name="dirawat"></td>
			</tr>
			<tr> 
				<td>Sembuh</td>
				<td><input type="text" name="sembuh"></td>
			</tr>
			<tr> 
				<td>Meninggal</td>
				<td><input type="text" name="meninggal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$positif = $_POST['positif'];
		$dirawat = $_POST['dirawat'];
		$sembuh = $_POST['sembuh'];
		$meninggal = $_POST['meninggal'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(positif,dirawat,sembuh,meninggal) VALUES('$positif','$dirawat','$sembuh','meninggal')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
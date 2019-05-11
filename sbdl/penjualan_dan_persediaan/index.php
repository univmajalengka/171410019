<?php 
 session_start();

 if (isset($_SESSION["ussername"])) {
 	header("Location:admin/index.php");
 	exit;

 }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
	
<body>
	<form action="login_koneksi.php" method="post">

		<ul>
			<li>
				<label for="username">ussername :</label>
				<input type="text" name="ussername" id="username">
			</li>
		
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">

			</li>
			
			<li>
				<button type="submit" name="login">Login</button>
			</li>

		</ul> 
	</form>
</body>


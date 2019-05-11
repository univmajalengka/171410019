<!DOCTYPE html>
<html>
<head>
	<title>Input Relasi Fakultas</title>
</head>
<body>
<form method="post" action="save_user.php">
<input type="text" name="id_usser" placeholder="ID User">
<input type="text" name="password" placeholder="Password">
<input type="text" name="ussername" placeholder="Username">
<input type="text" name="hakakses" placeholder="Hak Akses">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_user.php' ?>
</body>
</html>
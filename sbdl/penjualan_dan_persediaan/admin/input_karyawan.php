<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
</head>
<body>
<form method="post" action="save_karyawan.php">
<input type="text" name="kode_karyawan" placeholder="Kode">
<input type="text" name="nama_karyawan" placeholder="Nama">
<input type="text" name="password_karyawan" placeholder="Password">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_karyawan.php' ?>
</body>
</html>
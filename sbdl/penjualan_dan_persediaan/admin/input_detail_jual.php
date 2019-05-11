<!DOCTYPE html>
<html>
<head>
	<title>Input Detail Jual</title>
</head>
<body>
<form method="post" action="save_detail_jual.php">
<input type="text" name="faktur" placeholder="Faktur">
<input type="text" name="kode_barang" placeholder="Kode Barang">
<input type="text" name="jumlah_jual" placeholder="Jumlah Jual">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_detail_jual.php' ?>
</body>
</html>
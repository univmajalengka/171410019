<!DOCTYPE html>
<html>
<head>
	<title>Input Barang</title>
</head>
<body>
<form method="post" action="save_barang.php">
<input type="text" name="kode_barang" placeholder="Kode Barang">
<input type="text" name="nama_barang" placeholder="Nama Barang">
<input type="text" name="harga_barang" placeholder="Harga Barang">
<input type="text" name="jumlah_barang" placeholder="Jumlah Barang">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_barang.php' ?>
</body>
</html>
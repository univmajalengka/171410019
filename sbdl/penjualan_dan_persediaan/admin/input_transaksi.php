<!DOCTYPE html>
<html>
<head>
	<title>Input Transaksi</title>
</head>
<body>
<form method="post" action="save_transaksi.php">
<input type="text" name="no" placeholder="no">
<input type="text" name="kode" placeholder="Kode Barang">
<input type="text" name="nama" placeholder="Nama Barang">
<input type="text" name="jumlah" placeholder="Jumlah Barang">
<input type="text" name="total" placeholder="Total Harga">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_transaksi.php' ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Input Penjualan</title>
</head>
<body>
<form method="post" action="save_penjualan.php">
<input type="text" name="faktur" placeholder="Faktur">
<input type="text" name="tanggal" placeholder="Tanggal">
<input type="text" name="jam" placeholder="Jam">
<input type="text" name="jumlah_harga" placeholder="Jumlah Harga">
<input type="text" name="jumlah_item" placeholder="Jumlah Item">
<input type="text" name="jumlah_kembali" placeholder="Jumlah Kembali">
<input type="text" name="kode_karyawan" placeholder="Kode Karyawan">
<input type="submit" name="simpan" value="simpan">	
</form>
<?php 
include 'view_penjualan.php' ?>
</body>
</html>
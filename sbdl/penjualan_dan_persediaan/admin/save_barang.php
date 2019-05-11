<?php 
 include '../connection.php';
  $kode_barang  = $_POST['kode_barang']; 
  $nama_barang  = $_POST['nama_barang'];
  $harga_barang  = $_POST['harga_barang'];
    $jumlah_barang  = $_POST['jumlah_barang'];
  $mysqli  = "INSERT INTO table_barang (kode_barang,nama_barang,harga_barang,jumlah_barang) VALUES ('$kode_barang', '$nama_barang', '$harga_barang', '$jumlah_barang')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_barang.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>
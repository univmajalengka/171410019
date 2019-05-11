<?php 
 include '../connection.php';
  $faktur  = $_POST['faktur']; 
  $tanggal  = $_POST['tanggal'];
  $jam  = $_POST['jam'];
    $jumlah_harga  = $_POST['jumlah_harga'];
    $jumlah_item  = $_POST['jumlah_item'];
    $jumlah_kembali  = $_POST['jumlah_kembali'];
    $kode_karyawan  = $_POST['kode_karyawan'];
  $mysqli  = "INSERT INTO table_penjualan (faktur,tanggal,jam,jumlah_harga,jumlah_item,jumlah_kembali,kode_karyawan) VALUES ('$faktur', '$tanggal', '$jam', '$jumlah_harga', '$jumlah_item', '$jumlah_kembali', '$kode_karyawan')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_penjualan.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>
<?php 
 include '../connection.php';
  $faktur  = $_POST['faktur']; 
  $kode_barang  = $_POST['kode_barang'];
  $jumlah_jual  = $_POST['jumlah_jual'];
  $mysqli  = "INSERT INTO table_detail_jual (faktur,kode_barang,jumlah_jual) VALUES ('$faktur', '$kode_barang', '$jumlah_jual')";
  $result  = mysqli_query($con, $mysqli);
  if ($result) {
    echo "<script> alert('Input Berhasil'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=input_detail_jual.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($con);
?>